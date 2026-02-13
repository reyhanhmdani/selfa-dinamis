<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
        'type',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Gallery $gallery) {
            // Default ke urutan berikutnya jika 0 atau null
            if (empty($gallery->sort_order)) {
                $gallery->sort_order = static::getNextSortOrder($gallery->type);
                return;
            }

            // Geser item yang sort_order-nya >= item baru ke bawah
            static::where('type', $gallery->type)
                ->where('sort_order', '>=', $gallery->sort_order)
                ->increment('sort_order');
        });

        static::updating(function (Gallery $gallery) {
            if (! $gallery->isDirty('sort_order')) {
                return;
            }

            $oldOrder = $gallery->getOriginal('sort_order');
            $newOrder = $gallery->sort_order;

            if ($newOrder < $oldOrder) {
                // Pindah ke atas: geser yang di antara newOrder..oldOrder-1 ke bawah
                static::where('type', $gallery->type)
                    ->where('id', '!=', $gallery->id)
                    ->whereBetween('sort_order', [$newOrder, $oldOrder - 1])
                    ->increment('sort_order');
            } elseif ($newOrder > $oldOrder) {
                // Pindah ke bawah: geser yang di antara oldOrder+1..newOrder ke atas
                static::where('type', $gallery->type)
                    ->where('id', '!=', $gallery->id)
                    ->whereBetween('sort_order', [$oldOrder + 1, $newOrder])
                    ->decrement('sort_order');
            }
        });
    }

    /**
     * Ambil nomor urut berikutnya untuk kategori tertentu.
     */
    public static function getNextSortOrder(?string $type = null): int
    {
        $query = static::query();

        if ($type) {
            $query->where('type', $type);
        }

        return ($query->max('sort_order') ?? 0) + 1;
    }

    /**
     * Scope: hanya galeri yang aktif.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: filter berdasarkan kategori (sd, ponpes, kbtk).
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }
}

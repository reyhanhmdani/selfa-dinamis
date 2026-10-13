<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'division',
        'title',
        'badge',
        'vision',
        'missions',
        'about_title',
        'about_text',
        'about_image',
        'features',
    ];

    protected $casts = [
        'missions' => 'array',
        'features' => 'array',
    ];

    /**
     * Scope query by division type.
     */
    public function scopeOfType(Builder $query, string $division): Builder
    {
        return $query->where('division', $division);
    }

    /**
     * Get missions as a clean list of strings regardless of repeater structure.
     */
    public function getMissionListAttribute(): array
    {
        if (empty($this->missions)) {
            return [];
        }

        $list = [];
        foreach ($this->missions as $item) {
            if (is_array($item)) {
                $val = $item['text'] ?? ($item['item'] ?? reset($item));
            } else {
                $val = (string) $item;
            }

            if (!empty(trim((string) $val))) {
                $list[] = trim((string) $val);
            }
        }

        return $list;
    }

    /**
     * Get features/advantages as a clean list of strings regardless of repeater structure.
     */
    public function getFeatureListAttribute(): array
    {
        if (empty($this->features)) {
            return [];
        }

        $list = [];
        foreach ($this->features as $item) {
            if (is_array($item)) {
                $val = $item['text'] ?? ($item['item'] ?? reset($item));
            } else {
                $val = (string) $item;
            }

            if (!empty(trim((string) $val))) {
                $list[] = trim((string) $val);
            }
        }

        return $list;
    }
}

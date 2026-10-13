<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionWave extends Model
{
    use HasFactory;

    protected $fillable = [
        'wave_name',
        'is_active',
        'start_date',
        'end_date',
        'brochure_file',
        'whatsapp_number',
        'announcement',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function getCleanWhatsappAttribute(): string
    {
        $number = preg_replace('/[^0-9]/', '', $this->whatsapp_number ?? '082122073707');
        if (str_starts_with($number, '0')) {
            $number = '62' . substr($number, 1);
        }
        return $number;
    }
}

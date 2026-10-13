<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_type',
        'title',
        'registration_fee',
        'enrollment_fee',
        'monthly_tuition',
        'uniform_fee',
        'features',
        'requirements',
        'notes',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'features' => 'array',
        'requirements' => 'array',
        'is_published' => 'boolean',
        'registration_fee' => 'integer',
        'enrollment_fee' => 'integer',
        'monthly_tuition' => 'integer',
        'uniform_fee' => 'integer',
        'sort_order' => 'integer',
    ];

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)->orderBy('sort_order');
    }

    public function getIsFreeAttribute(): bool
    {
        return $this->program_type === 'ponpes' || ($this->enrollment_fee === 0 && $this->monthly_tuition === 0);
    }

    public static function formatRupiah(?int $amount, string $zeroLabel = 'Rp 0'): string
    {
        if ($amount === null || $amount === 0) {
            return $zeroLabel;
        }
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }

    public function getFormattedRegistrationFeeAttribute(): string
    {
        return self::formatRupiah($this->registration_fee, 'Gratis / Bebas Biaya');
    }

    public function getFormattedEnrollmentFeeAttribute(): string
    {
        return self::formatRupiah($this->enrollment_fee, 'Gratis (Beasiswa Penuh)');
    }

    public function getFormattedMonthlyTuitionAttribute(): string
    {
        return self::formatRupiah($this->monthly_tuition, 'Gratis / Bebas SPP');
    }

    public function getFormattedUniformFeeAttribute(): string
    {
        return self::formatRupiah($this->uniform_fee, 'Gratis / Disediakan');
    }
}

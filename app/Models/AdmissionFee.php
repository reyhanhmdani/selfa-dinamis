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
        'notes',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'features' => 'array',
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

    public static function formatRupiah(?int $amount): string
    {
        if ($amount === null || $amount === 0) {
            return 'Rp 0';
        }
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }

    public function getFormattedRegistrationFeeAttribute(): string
    {
        return self::formatRupiah($this->registration_fee);
    }

    public function getFormattedEnrollmentFeeAttribute(): string
    {
        return self::formatRupiah($this->enrollment_fee);
    }

    public function getFormattedMonthlyTuitionAttribute(): string
    {
        return self::formatRupiah($this->monthly_tuition);
    }

    public function getFormattedUniformFeeAttribute(): string
    {
        return self::formatRupiah($this->uniform_fee);
    }
}

<?php

namespace Database\Seeders;

use App\Models\AdmissionFee;
use App\Models\AdmissionWave;
use Illuminate\Database\Seeder;

class AdmissionSeeder extends Seeder
{
    public function run(): void
    {
        AdmissionWave::updateOrCreate(
            ['wave_name' => 'Gelombang 1 - TA 2026/2027'],
            [
                'is_active' => true,
                'start_date' => now()->startOfMonth(),
                'end_date' => now()->addMonths(2)->endOfMonth(),
                'whatsapp_number' => '082122073707',
                'announcement' => 'Pendaftaran Santri Baru Tahun Ajaran 2026/2027 Resmi Dibuka. Dapatkan kemudahan konsultasi langsung dengan panitia PPDB!',
            ]
        );

        $fees = [
            [
                'program_type' => 'kbtk',
                'title' => 'KB & TK Sayf El Falah',
                'registration_fee' => 150000,
                'enrollment_fee' => 2500000,
                'monthly_tuition' => 250000,
                'uniform_fee' => 500000,
                'features' => [
                    'Pembiasaan Adab & Doa Harian',
                    'Tahfidz Juz 30 Bertahap',
                    'Sentra Eksplorasi Alam & Sensorik',
                    'Laporan Perkembangan Fitrah Anak',
                    'Snack Sehat Terjadwal',
                ],
                'notes' => 'Termasuk modul belajar & kegiatan kelas',
                'sort_order' => 1,
                'is_published' => true,
            ],
            [
                'program_type' => 'sd',
                'title' => 'SD Alam Sayf El Falah',
                'registration_fee' => 200000,
                'enrollment_fee' => 4500000,
                'monthly_tuition' => 400000,
                'uniform_fee' => 750000,
                'features' => [
                    'Kurikulum Nasional + Diniyyah Integratif',
                    'Target Tahfidz 3-5 Juz Mutqin',
                    'Pendidikan Berbasis Alam & Outbound',
                    'Pembiasaan Sholat Berjamaah & Dhuha',
                    'Lifeskills, Berkuda & Memanah',
                ],
                'notes' => 'Termasuk buku panduan belajar semester 1',
                'sort_order' => 2,
                'is_published' => true,
            ],
            [
                'program_type' => 'ponpes',
                'title' => 'Pondok Pesantren Sayf El Falah',
                'registration_fee' => 250000,
                'enrollment_fee' => 7000000,
                'monthly_tuition' => 850000,
                'uniform_fee' => 1000000,
                'features' => [
                    'Asrama Representatif & Makan 3x Sehari',
                    'Program Tahfidz Intensif Target Mutqin',
                    'Kajian Kitab Kuning / Dirasah Islamiyyah',
                    'Bahasa Arab & Inggris Aktif Harian',
                    'Bimbingan Asatidzah Pengasuh 24 Jam',
                    'Pemisahan Kampus Ikhwan & Akhwat',
                ],
                'notes' => 'Sudah termasuk biaya asrama, makan, dan pembinaan santri',
                'sort_order' => 3,
                'is_published' => true,
            ],
        ];

        foreach ($fees as $fee) {
            AdmissionFee::updateOrCreate(
                ['program_type' => $fee['program_type']],
                $fee
            );
        }
    }
}

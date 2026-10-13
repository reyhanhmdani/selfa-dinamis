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
                'requirements' => [
                    'Kelompok Bermain (KB): Usia 3 – 4 Tahun',
                    'Taman Kanak-kanak (TK): Usia 4 – 6 Tahun',
                    'Fotokopi Akta Kelahiran & Kartu Keluarga',
                    'Tanpa tes calistung (fokus fitrah & motorik)',
                ],
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
                'requirements' => [
                    'Usia Kelas 1 SD: Minimal 6 Tahun per Juli',
                    'Fotokopi Akta Kelahiran & Kartu Keluarga (2 lembar)',
                    'Pas foto 3x4 (3 lembar) & Fotokopi KTP Orang Tua',
                ],
                'sort_order' => 2,
                'is_published' => true,
            ],
            [
                'program_type' => 'ponpes',
                'title' => 'Pondok Pesantren Sayf El Falah',
                'registration_fee' => 0,
                'enrollment_fee' => 0,
                'monthly_tuition' => 0,
                'uniform_fee' => null,
                'features' => [
                    '100% Bebas Biaya Pendidikan & SPP Bulanan',
                    'Fasilitas Asrama & Konsumsi 3x Sehari (Gratis)',
                    'Program Tahfidz Intensif Target 30 Juz Mutqin',
                    'Kajian Kitab Kuning / Dirasah Islamiyyah',
                    'Bahasa Arab & Inggris Aktif Harian',
                    'Bimbingan Asatidzah Pengasuh 24 Jam',
                    'Pemisahan Kampus Ikhwan & Akhwat',
                ],
                'notes' => 'Program Beasiswa Penuh Sayf El Falah untuk santri mukim beradab & berkomitmen hafidz Al-Qur\'an',
                'requirements' => [
                    'Lulusan SD/MI sederajat',
                    'Siap tinggal di asrama & mentaati tata tertib pondok',
                    'Lulus seleksi baca Al-Qur\'an & wawancara komitmen',
                ],
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

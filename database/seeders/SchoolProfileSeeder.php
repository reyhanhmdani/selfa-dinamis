<?php

namespace Database\Seeders;

use App\Models\SchoolProfile;
use Illuminate\Database\Seeder;

class SchoolProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'division' => 'general',
                'title' => 'Yayasan Sayf El Falah',
                'badge' => 'Arah & Tujuan Kami',
                'vision' => 'Membangun lingkungan pembelajaran paling ideal yang Islami, mutakhir, menyenangkan, dan terintegrasi dengan aktivitas kehidupan. Kami ingin membantu setiap anak tumbuh menjadi manusia utuh yang mampu menjadi pemimpin dan rahmat bagi dunia, sesuai dengan ajaran Allah Ta’ala dan Rasulullah shallallahu alaihi wa sallam.',
                'missions' => [
                    ['text' => "Membiasakan perilaku Islami dalam kehidupan sehari-hari anak-anak sesuai dengan Al-Qur'an dan As-Sunnah."],
                    ['text' => "Melaksanakan pembelajaran yang interaktif dan inovatif sesuai dengan perkembangan anak."],
                    ['text' => "Menjadikan Para Nabi sebagai teladan utama (role model) bagi anak-anak dalam setiap aspek kehidupan."],
                    ['text' => "Menyediakan metode pembelajaran yang komprehensif untuk mengembangkan seluruh aspek dasar manusia."],
                    ['text' => "Menjadi lingkungan tumbuh terbaik bagi anak-anak di masa keemasannya."],
                ],
                'about_title' => 'Sejarah Singkat',
                'about_text' => 'Sayf El Falah adalah sebuah yayasan pendidikan yang didirikan di atas keyakinan kuat bahwa setiap anak memiliki potensi unik yang harus dikembangkan sesuai dengan fitrahnya. Kami tidak hanya berkomitmen pada pendidikan formal, tetapi juga berfokus pada pembentukan karakter, kepemimpinan, dan kecintaan pada ilmu pengetahuan.',
                'features' => [
                    ['text' => 'Guru berkualitas dan berpengalaman'],
                    ['text' => 'Fasilitas pembelajaran lengkap dan modern'],
                    ['text' => 'Kurikulum terpadu nasional dan islami'],
                    ['text' => 'Lingkungan belajar yang nyaman dan kondusif'],
                ],
            ],
            [
                'division' => 'kbtk',
                'title' => 'KB & TK Sayf El Falah',
                'badge' => 'Arah Pendidikan KB & TK',
                'vision' => 'Membangun lingkungan pembelajaran paling ideal dalam islami, mutakhir, menyenangkan dan terintegritas dengan aktivitas kehidupan bagi anak anak',
                'missions' => [
                    ['text' => "Membiasakan perilaku Islami dalam kehidupan sehari hari sesuai dengan Al-Qur'an dan As Sunnah"],
                    ['text' => "Melaksanakan pembelajaran sesuai dengan perkembangan anak"],
                    ['text' => "Menjadikan Para Nabi sebagai role model bagi anak anak"],
                ],
                'about_title' => 'KB & TK Sayf El Falah',
                'about_text' => "KB & TK Sayf El Falah adalah lembaga pendidikan anak usia dini yang menerapkan pendekatan bermain sambil belajar dengan berlandaskan nilai-nilai Islam.\n\nKami berkomitmen memberikan pengalaman belajar yang menyenangkan, kreatif, dan bermakna bagi setiap anak didik kami.",
                'features' => [
                    ['text' => 'Pendekatan Bermain Sambil Belajar'],
                    ['text' => 'Pembentukan Karakter Islami'],
                    ['text' => 'Lingkungan yang Aman & Nyaman'],
                    ['text' => 'Pengajar Berdedikasi'],
                ],
            ],
            [
                'division' => 'sd',
                'title' => 'SD Alam Sayf El Falah',
                'badge' => 'Arah Pendidikan SD Alam',
                'vision' => "Menjadi Sekolah yang membantu setiap anak tumbuh sesuai fitrahnya, hingga menjadi manusia utuh yang mampu menjadi pemimpin dan rahmat bagi dunia sesuai keinginan Allah Ta'ala dan Rasulullah shollallahu alaihi wa sallam.",
                'missions' => [
                    ['text' => 'Menyediakan metode pembelajaran yang mengembangkan dan menyentuh seluruh aspek dasar manusia meliputi akal, rasa, fisik, mental dan sosial'],
                    ['text' => 'Menjadi tempat tumbuh terbaik bagi anak di masa depan keemasannya dengan memberikan beragam pengalaman kehidupan yang dibutuhkan di masa depan'],
                ],
                'about_title' => 'SD Alam Sayf El Falah',
                'about_text' => "SD Alam Sayf El Falah menghadirkan pengalaman belajar yang unik dengan mengintegrasikan kurikulum nasional, pendidikan agama Islam, dan konsep alam sebagai ruang belajar utama.\n\nDi sini, siswa tidak hanya belajar di dalam kelas, tetapi juga di alam terbuka — menumbuhkan semangat eksplorasi, kecintaan pada ilmu pengetahuan, dan kepedulian terhadap lingkungan.",
                'features' => [
                    ['text' => 'Kurikulum Nasional + Islam Terpadu'],
                    ['text' => 'Pembelajaran Berbasis Alam'],
                    ['text' => "Tahfidzul Qur'an"],
                    ['text' => 'Life Skills & Leadership'],
                ],
            ],
            [
                'division' => 'ponpes',
                'title' => 'Pondok Pesantren Sayf El Falah',
                'badge' => 'Arah Pendidikan Ponpes',
                'vision' => 'Menjadi lembaga pendidikan Islam terdepan yang mencetak generasi beriman dan bertakwa kepada Allah, serta memiliki karakter yang kuat dan dapat dipercaya (Al-Qawoiyyul Amiin).',
                'missions' => [
                    ['text' => "Membentuk santri yang sehat jasmani dan rohani berdasarkan Qur'an dan Sunnah"],
                    ['text' => 'Mencetak santri yang mandiri, kreatif, inovatif, dan memiliki jiwa kepimpinan untuk berperan aktif di tengah masyarakat'],
                    ['text' => 'Menjadi lembaga pendidikan Islam yang dekat dan bermanfaat bagi seluruh lapisan masyarakat'],
                    ['text' => 'Menyelenggarakan pendidikan yang berkualitas dengan metode dan sarana yang selalu mengikuti perkembangan zaman dengan menjunjung tinggi nilai-nilai keislamian'],
                ],
                'about_title' => 'Pondok Pesantren Sayf El Falah',
                'about_text' => "Pondok Pesantren Sayf El Falah adalah lembaga pendidikan Islam modern yang menggabungkan tradisi pesantren salaf dengan pendidikan formal berkualitas.\n\nSantri mendapatkan pembinaan intensif dalam bidang agama, akademik, dan keterampilan hidup, sehingga siap menjadi generasi yang mandiri dan berdaya saing.",
                'features' => [
                    ['text' => "Tahfidzul Qur'an 30 Juz"],
                    ['text' => 'Bahasa Arab & Inggris Aktif'],
                    ['text' => 'Pendidikan Kepemimpinan'],
                    ['text' => 'Asrama Full-Boarding'],
                ],
            ],
        ];

        foreach ($profiles as $profile) {
            SchoolProfile::updateOrCreate(
                ['division' => $profile['division']],
                $profile
            );
        }
    }
}

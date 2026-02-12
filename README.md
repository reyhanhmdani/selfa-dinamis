# Sayf El Falah V2 — Web Portal

Selamat datang di repository resmi Web Portal **Sayf El Falah**. Website ini dirancang untuk memberikan informasi lengkap mengenai ekosistem pendidikan di Sayf El Falah, mulai dari tingkat KB/TK, SD Alam, hingga Pondok Pesantren.

## 🚀 Deskripsi Proyek

Website ini dibangun menggunakan **Laravel 11** dan **Vite** dengan sistem desain kustom yang menggabungkan kekuatan **Tailwind CSS** untuk utilitas dan **Vanilla CSS** untuk komponen premium. Fokus utama dari pengembangan ini adalah estetika yang kaya, performa yang optimal, dan pengalaman pengguna yang interaktif.

### 🏫 Halaman Utama
- **Home**: Beranda utama sekolah.
- **KB & TK**: Informasi khusus untuk jenjang pendidikan usia dini.
- **SD Alam**: Informasi mengenai sekolah dasar berbasis alam dan Al-Qur'an.
- **Pondok Pesantren**: Informasi mengenai jenjang pendidikan pesantren.

## ✨ Fitur Unggulan

- **Premium Design System**: Antarmuka modern dengan glassmorphism, animasi mikro, dan skema warna yang harmonis.
- **PPDB Section**: Sistem informasi pendaftaran yang interaktif dan minimalis.
- **School News Slider**: Slider berita sekolah yang responsif dan mendukung drag/swipe.
- **Integrated Gallery**: Galeri kegiatan siswa dengan fitur lightbox.
- **Performance Optimized**: Menggunakan Vite untuk manajemen aset dan teknik lazy-loading untuk gambar.
- **Responsive Layout**: Tampilan yang menyesuaikan dengan sempurna di perangkat desktop, tablet, maupun mobile.

## 🛠️ Persyaratan Sistem

Pastikan perangkat Anda sudah terinstall:
- PHP >= 8.2
- Composer
- Node.js & NPM
- Database (MySQL/SQLite)

## 💻 Langkah-Langkah Instalasi

Ikuti langkah berikut untuk menjalankan proyek di lingkungan lokal Anda:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/selfa-dynamic.git
   cd selfa-dynamic
   ```

2. **Install Dependensi PHP**
   ```bash
   composer install
   ```

3. **Install Dependensi JavaScript**
   ```bash
   npm install
   ```

4. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env` dan atur koneksi database Anda.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Link Storage**
   Buat symbolic link untuk folder storage agar file publik dapat diakses.
   ```bash
   php artisan storage:link
   ```

6. **Migrasi Database** (Opsional jika ada database)
   ```bash
   php artisan migrate
   ```

7. **Jalankan Aplikasi**
   Buka dua terminal:
   - Terminal 1 (Vite): `npm run dev`
   - Terminal 2 (Laravel): `php artisan serve`

Akses aplikasi melalui `http://localhost:8000`.

## 📦 Build untuk Produksi

Jika ingin melakukan deployment:
```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---
Dibuat dengan ❤️ oleh Tim Sayf El Falah.

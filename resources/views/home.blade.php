@extends('layouts.app')

@section('content')
  <!-- ============ HERO SECTION ============ -->
  <header class="hero">
    <div class="hero-bg">
      <img src="{{ asset('image/selfa2.jpg') }}" alt="Sekolah Sayf El Falah" />
      <div class="hero-overlay"></div>
      <div class="hero-particles"></div>
    </div>

    <div class="hero-content">
      <p class="hero-subtitle">Selamat Datang di Sekolah</p>
      <h1 class="hero-title">Sayf El Falah</h1>
      <p class="hero-desc">
        Membentuk Generasi Unggul, Berkarakter, dan Berprestasi.
      </p>
      <a href="#about" class="hero-cta">
        Selengkapnya
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
      </a>
    </div>

    <div class="hero-scroll-indicator">
      <div class="scroll-mouse"></div>
      <span>Scroll</span>
    </div>
  </header>

  <!-- ============ VISI & MISI ============ -->
  <section class="section-padding bg-gradient-subtle" id="visimisi" style="zoom: 90%">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Visi & Misi</span>
        <h2 class="section-title">Arah & Tujuan Kami</h2>
        <div class="section-line"></div>
      </div>

      <div class="visi-misi-grid">
        <!-- Visi -->
        <div class="visi-card reveal-left">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <h3 class="card-title">Visi Kami</h3>
          <p class="text-gray" style="line-height: 1.8;">
            Membangun lingkungan pembelajaran paling ideal yang Islami, mutakhir, menyenangkan, dan terintegrasi dengan aktivitas kehidupan. Kami ingin membantu setiap anak tumbuh menjadi manusia utuh yang mampu menjadi pemimpin dan rahmat bagi dunia, sesuai dengan ajaran Allah Ta’ala dan Rasulullah shallallahu alaihi wa sallam.
          </p>
        </div>

        <!-- Misi -->
        <div class="misi-card reveal-right">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg>
          </div>
          <h3 class="card-title">Misi Kami</h3>
          <ul class="misi-list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Membiasakan perilaku Islami dalam kehidupan sehari-hari anak-anak sesuai dengan Al-Qur'an dan As-Sunnah.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Melaksanakan pembelajaran yang interaktif dan inovatif sesuai dengan perkembangan anak.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Menjadikan Para Nabi sebagai teladan utama (role model) bagi anak-anak dalam setiap aspek kehidupan.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Menyediakan metode pembelajaran yang komprehensif untuk mengembangkan seluruh aspek dasar manusia.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Menjadi lingkungan tumbuh terbaik bagi anak-anak di masa keemasannya.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SECTION DIVIDER ============ -->
  <div class="section-divider">
    <hr />
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
    <hr />
  </div>

  <!-- ============ ABOUT US ============ -->
  <section class="section-padding" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-image reveal-blur">
          <img src="{{ asset('image/masjidselfa1.jpg') }}" alt="Masjid Sayf El Falah" />
        </div>
        <div class="about-content reveal-right">
          <h3>Sejarah Singkat</h3>
          <p>
            Sayf El Falah adalah sebuah yayasan pendidikan yang didirikan di atas keyakinan kuat bahwa setiap anak memiliki potensi unik yang harus dikembangkan sesuai dengan fitrahnya. Kami tidak hanya berkomitmen pada pendidikan formal, tetapi juga berfokus pada pembentukan karakter, kepemimpinan, dan kecintaan pada ilmu pengetahuan.
          </p>
          
          <h3>Keunggulan Kami</h3>
          <ul class="feature-list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Guru berkualitas dan berpengalaman
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Fasilitas pembelajaran lengkap dan modern
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Kurikulum terpadu nasional dan islami
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Lingkungan belajar yang nyaman dan kondusif
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROGRAMS ============ -->
  <section class="section-padding bg-gradient-subtle" id="programs">
    <div class="container">
      <div class="section-header reveal-bounce">
        <span class="section-badge">Program Pendidikan</span>
        <h2 class="section-title">Jenjang Pendidikan Kami</h2>
        <div class="section-line"></div>
        <p class="section-desc">Tiga jenjang pendidikan yang dirancang secara komprehensif untuk membentuk generasi unggul dan berakhlak mulia.</p>
      </div>

      <div class="programs-grid stagger-container">
        <!-- KB & TK -->
        <a href="{{ url('/programs/kbtk') }}" class="program-card stagger-item">
          <div class="program-card-bg"></div>
          <div class="program-card-content">
            <div class="program-icon">
              <img src="{{ asset('image/logo-tk.png') }}" alt="KB & TK Selfa" />
            </div>
            <h3 class="program-card-title">KB & TK Selfa</h3>
            <p class="program-card-desc">
              Membangun fondasi Islami dan karakter anak melalui pembelajaran yang menyenangkan dan berfokus pada fitrah.
            </p>
            <div class="program-card-link">
              Lihat Program
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
            </div>
          </div>
        </a>

        <!-- SD Alam -->
        <a href="{{ url('/programs/sd') }}" class="program-card stagger-item">
          <div class="program-card-bg"></div>
          <div class="program-card-content">
            <div class="program-icon">
              <img src="{{ asset('image/icon-sd-selfa.png') }}" alt="SD Alam Selfa" />
            </div>
            <h3 class="program-card-title">SD Alam Selfa</h3>
            <p class="program-card-desc">
              Pembelajaran berbasis alam untuk mengembangkan akal dan fisik anak secara interaktif dan holistik.
            </p>
            <div class="program-card-link">
              Lihat Program
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
            </div>
          </div>
        </a>

        <!-- Ponpes -->
        <a href="{{ url('/programs/ponpes') }}" class="program-card stagger-item">
          <div class="program-card-bg"></div>
          <div class="program-card-content">
            <div class="program-icon">
              <img src="{{ asset('image/logo-ponpes.png') }}" alt="Ponpes Selfa" />
            </div>
            <h3 class="program-card-title">Ponpes Selfa</h3>
            <p class="program-card-desc">
              Mencetak generasi pemimpin yang menguasai ilmu agama dan modern secara seimbang untuk masa depan.
            </p>
            <div class="program-card-link">
              Lihat Program
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- ============ SCHOOL NEWS SLIDER ============ -->
  <x-news-slider :news="$news" />

  <!-- ============ STATISTICS ============ -->
  <section class="stats-section section-padding">
    <div class="stats-bg">
      <img src="{{ asset('image/selfa.jpg') }}" alt="Background Stats" />
    </div>
    <div class="stats-overlay"></div>
    
    <div class="container relative z-10">
      <div class="stats-grid">
        <div class="stat-item reveal-scale">
          <div class="stat-number" data-target="350" data-suffix="+">0</div>
          <div class="stat-label">Siswa</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 100ms;">
          <div class="stat-number" data-target="40" data-suffix="+">0</div>
          <div class="stat-label">Guru</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 200ms;">
          <div class="stat-number" data-target="25" data-suffix="">0</div>
          <div class="stat-label">Kelas</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 300ms;">
          <div class="stat-number" data-target="10" data-suffix="+">0</div>
          <div class="stat-label">Ekstrakurikuler</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ GALLERY ============ -->
  <section class="section-padding" id="gallery">
    <div class="container">
      <div class="section-header reveal-bounce">
        <span class="section-badge">Galeri</span>
        <h2 class="section-title">Momen & Kegiatan</h2>
        <div class="section-line"></div>
      </div>

      <div class="gallery-grid">
        <div class="gallery-item reveal-scale">
          <img src="{{ asset('image/belajarikhwan1.jpg') }}" alt="Kegiatan Belajar" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale" style="transition-delay: 100ms;">
          <img src="{{ asset('image/belajarakhwat1.jpg') }}" alt="Ekstrakurikuler" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale" style="transition-delay: 200ms;">
          <img src="{{ asset('image/IMG_3454.JPEG') }}" alt="Perpustakaan" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale" style="transition-delay: 300ms;">
          <img src="{{ asset('image/sholat dhuha.jpg') }}" alt="Salat Dhuha" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale">
          <img src="{{ asset('image/swimming class.jpg') }}" alt="Renang" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale" style="transition-delay: 100ms;">
          <img src="{{ asset('image/IMG_3091.JPG') }}" alt="Kelas" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale" style="transition-delay: 200ms;">
          <img src="{{ asset('image/gambar_bersama.jpg') }}" alt="Foto Bersama" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item reveal-scale" style="transition-delay: 300ms;">
          <img src="{{ asset('image/hadrahikhwan1.jpg') }}" alt="Hadrah" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ LIGHTBOX ============ -->
  <div class="lightbox" id="lightbox">
    <button class="lightbox-close">&times;</button>
    <button class="lightbox-btn lightbox-prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    <img class="lightbox-image" src="" alt="Gallery Image" />
    <button class="lightbox-btn lightbox-next">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
    <div class="lightbox-thumbs"></div>
  </div>

  <!-- ============ CONTACT ============ -->
  <section class="section-padding bg-gradient-subtle" id="contact">
    <div class="container">
      <div class="section-header reveal-bounce">
        <span class="section-badge">Kontak</span>
        <h2 class="section-title">Hubungi Kami</h2>
        <div class="section-line"></div>
      </div>

      <div class="contact-grid reveal-blur">
        <div class="contact-info">
          <h3>Informasi Kontak</h3>
          
          <div class="contact-item">
            <div class="contact-item-icon">
              <!-- Address Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div>
              <h4>Alamat</h4>
              <p>Jl. Ki Ageng Selo, Krasakan, Jebugan, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57433</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <!-- Phone Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div>
              <h4>Telepon</h4>
              <p>0811 2653 630 (WhatsApp)</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <!-- Email Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <h4>Email</h4>
              <p>Sayfelfalah@gmail.com</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <!-- Clock Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div>
              <h4>Jam Operasional</h4>
              <p>Senin - Jumat: 07.00 - 16.00 WIB</p>
              <p>Sabtu: 08.00 - 12.00 WIB</p>
              <p>Minggu & Hari Libur: Tutup</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="social-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
            <a href="#" class="social-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
            <a href="#" class="social-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a>
          </div>
        </div>

        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.002754723333!2d110.59855107326445!3d-7.682850676058566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a435be390e88f%3A0x56c6df479b7dcb9!2sSekolah%20Alam%20Selfa!5e0!3m2!1sid!2sid!4v1756700327534!5m2!1sid!2sid"
            width="100%"
            height="100%"
            style="border: 0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection

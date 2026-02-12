@extends('layouts.app')

@section('title', 'KB & TK Sayf El Falah')

@section('content')
  <!-- ============ HERO SECTION ============ -->
  <header class="hero">
    <div class="hero-bg">
      <img src="{{ asset('image/gedungkbtk.jpg') }}" alt="Gedung KB & TK Sayf El Falah" fetchpriority="high" />
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>

    <div class="hero-content">
      <div class="hero-subtitle">Selamat Datang di KB & TK</div>
      <h1 class="hero-title">Sayf El Falah</h1>
      <p class="hero-desc">Membentuk generasi cerdas, kreatif, dan berakhlak mulia melalui pendidikan usia dini yang menyenangkan.</p>
      <a href="#programs" class="hero-cta">
        Lihat Program
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>

    <div class="hero-scroll-indicator">
      <div class="scroll-mouse"></div>
      <span>Scroll</span>
    </div>
  </header>

  <!-- ============ ABOUT KB & TK ============ -->
  <section class="section-padding bg-gradient-subtle" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-image reveal-left">
          <img src="{{ asset('image/KBM TK.JPEG') }}" alt="Pembelajaran KB & TK" loading="lazy" />
        </div>
        <div class="about-content reveal-right">
          <span class="section-badge">Tentang KB & TK</span>
          <h3>KB & TK Sayf El Falah</h3>
          <p>KB & TK Sayf El Falah adalah lembaga pendidikan anak usia dini yang menerapkan pendekatan bermain sambil belajar dengan berlandaskan nilai-nilai Islam.</p>
          <p>Kami berkomitmen memberikan pengalaman belajar yang menyenangkan, kreatif, dan bermakna bagi setiap anak didik kami.</p>
          <ul class="feature-list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Pendekatan Bermain Sambil Belajar
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Pembentukan Karakter Islami
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Lingkungan yang Aman & Nyaman
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Pengajar Berdedikasi
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ VISI MISI KB TK ============ -->
  <section class="section-padding" id="visimisi">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Visi & Misi</span>
        <h2 class="section-title">Arah Pendidikan KB & TK</h2>
        <div class="section-line"></div>
      </div>

      <div class="visi-misi-grid">
        <div class="visi-card reveal-left">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <h3 class="card-title">Visi</h3>
          <p style="color:var(--gray-600);line-height:1.8;">Membangun lingkungan pembelajaran paling ideal dalam islami, mutakhir, menyenangkan dan terintegritas dengan aktivitas kehidupan bagi anak anak</p>
        </div>

        <div class="misi-card reveal-right">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
          </div>
          <h3 class="card-title">Misi</h3>
          <ul class="misi-list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Membiasakan perilaku Islami dalam kehidupan sehari hari sesuai dengan Al-Qur'an dan As Sunnah</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Melaksanakan pembelajaran sesuai dengan perkembangan anak</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Menjadikan Para Nabi sebagai role model bagi anak anak</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROGRAM UNGGULAN KB TK ============ -->
  <section class="section-padding bg-gradient-subtle" id="programs">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Program Kami</span>
        <h2 class="section-title">Program Unggulan KB & TK</h2>
        <div class="section-line"></div>
        <p class="section-desc">Program pembelajaran yang dirancang khusus untuk mengembangkan seluruh aspek perkembangan anak usia dini.</p>
      </div>

      <div class="programs-mini-grid stagger-container stagger-3d">
        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </div>
            <h4 class="program-mini-title">Science Experiment</h4>
            <p class="program-mini-desc">Mengenalkan konsep dasar sains melalui eksperimen sederhana yang interaktif.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            </div>
            <h4 class="program-mini-title">Calistung</h4>
            <p class="program-mini-desc">Membangun fondasi membaca, menulis, dan berhitung dengan metode yang menyenangkan.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            </div>
            <h4 class="program-mini-title">Creative Project</h4>
            <p class="program-mini-desc">Mendorong imajinasi dan kreativitas anak melalui proyek-proyek seni dan kerajinan tangan yang inovatif.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h4 class="program-mini-title">Fun Drawing</h4>
            <p class="program-mini-desc">Mengasah keterampilan motorik halus dan ekspresi diri anak melalui kegiatan menggambar dan mewarnai yang ceria.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line><line x1="17" y1="17" x2="22" y2="17"></line></svg>
            </div>
            <h4 class="program-mini-title">Tahfidz</h4>
            <p class="program-mini-desc">Membimbing anak untuk menghafal ayat-ayat pendek Al-Qur'an dengan metode yang mudah dan menyenangkan.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <h4 class="program-mini-title">Olahraga</h4>
            <p class="program-mini-desc">Mengembangkan kemampuan motorik kasar dan kebugaran fisik anak melalui berbagai aktivitas olahraga dan permainan gerak.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            </div>
            <h4 class="program-mini-title">Movie Time</h4>
            <p class="program-mini-desc">Menonton film edukatif dan cerita anak yang dipilih secara cermat untuk menstimulasi imajinasi dan moral anak.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            </div>
            <h4 class="program-mini-title">Outbond</h4>
            <p class="program-mini-desc">Kegiatan luar ruangan yang seru untuk melatih kemandirian, keberanian, dan kerja sama tim anak.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
            </div>
            <h4 class="program-mini-title">Cooking Class</h4>
            <p class="program-mini-desc">Mengajarkan anak keterampilan dasar memasak dan pentingnya gizi melalui aktivitas dapur yang menyenangkan dan aman.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2" ry="2"></rect><path d="M7 11v2a2 2 0 0 0 4 0v-2"></path><path d="M13 11v2a2 2 0 0 0 4 0v-2"></path></svg>
            </div>
            <h4 class="program-mini-title">Fun Game</h4>
            <p class="program-mini-desc">Berbagai permainan yang mengasyikkan untuk melatih kemampuan kognitif, sosial, dan fisik anak.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SCHOOL NEWS SLIDER ============ -->
  <x-news-slider />

  <!-- ============ STATISTICS ============ -->
  <section class="stats-section section-padding">
    <div class="stats-bg">
      <img src="{{ asset('image/gedungkbtk.jpg') }}" alt="Background" loading="lazy" />
    </div>
    <div class="stats-overlay"></div>
    <div class="container relative z-10">
      <div class="stats-grid">
        <div class="stat-item reveal-scale">
          <div class="stat-number" data-target="350" data-suffix="+">0</div>
          <div class="stat-label">Siswa Aktif</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 100ms;">
          <div class="stat-number" data-target="40" data-suffix="+">0</div>
          <div class="stat-label">Tenaga Pengajar</div>
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
      <div class="section-header reveal">
        <span class="section-badge">Galeri</span>
        <h2 class="section-title">Kegiatan KB & TK</h2>
        <div class="section-line"></div>
      </div>

      <div class="gallery-grid stagger-container">
        <div class="gallery-item stagger-item">
          <img src="{{ asset('image/IMG_3454.JPEG') }}" alt="Kegiatan KB TK" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item stagger-item">
          <img src="{{ asset('image/sholat dhuha.jpg') }}" alt="Sholat Dhuha" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item stagger-item">
          <img src="{{ asset('image/swimming class.jpg') }}" alt="Swimming Class" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item stagger-item">
          <img src="{{ asset('image/IMG_3091.JPG') }}" alt="Kegiatan KB TK" loading="lazy" />
          <div class="gallery-zoom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
          </div>
        </div>
        <div class="gallery-item stagger-item">
          <img src="{{ asset('image/gambar_bersama.jpg') }}" alt="Foto Bersama" loading="lazy" />
          <div class="gallery-zoom-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CONTACT ============ -->
  <section class="section-padding bg-gradient-subtle" id="contact">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Kontak</span>
        <h2 class="section-title">Hubungi KB & TK Selfa</h2>
        <div class="section-line"></div>
      </div>

      <div class="contact-grid reveal">
        <div class="contact-info">
          <h3>Informasi Kontak</h3>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div>
              <h4>Alamat</h4>
              <p>Jl. Dr. Wahidin Sudirohusodo, No. 37A. Plosoarum, Sekarsuli, Klaten Utara.</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div>
              <h4>Telepon</h4>
              <p>0811 2653 630 (WhatsApp)</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <h4>Email</h4>
              <p>Sayfelfalah@gmail.com</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div>
              <h4>Jam Operasional</h4>
              <p>Senin - Jumat: 07.00 - 16.00 WIB</p>
              <p>Sabtu: 08.00 - 12.00 WIB</p>
              <p>Minggu & Hari Libur: Tutup</p>
            </div>
          </div>
        </div>

        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.11980438448148!2d110.60416700745394!3d-7.692070618370334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4304e732ea4d%3A0x3a51e9f83b54f632!2sKB%20%26%20TK%20SAYF%20EL%20FALAH!5e0!3m2!1sid!2sid!4v1753072343013!5m2!1sid!2sid"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Lokasi KB & TK Sayf El Falah"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection

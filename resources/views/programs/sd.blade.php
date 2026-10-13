@extends('layouts.app')

@section('title', 'SD Alam Sayf El Falah')

@section('content')
  <!-- ============ HERO ============ -->
  <header class="hero">
    <div class="hero-bg">
      <img src="{{ asset('image/gedungSd.jpg') }}" alt="Gedung SD Alam Sayf El Falah" fetchpriority="high" />
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>

    <div class="hero-content">
      <div class="hero-subtitle">Adab & Critical Thinking</div>
      <h1 class="hero-title">SD Alam Selfa</h1>
      <p class="hero-desc">Sekolah bukan sekadar kelas. Alam adalah laboratorium terbaik untuk mengasah logika, kepemimpinan, dan kekaguman pada kebesaran Allah.</p>

      <!-- USP Cards (Hook) -->
      <div class="hero-usp-grid">
        <div class="hero-usp-card">
          <span class="usp-icon">🌿</span>
          <span class="usp-text">Laboratorium Alam</span>
        </div>
        <div class="hero-usp-card">
          <span class="usp-icon">🕌</span>
          <span class="usp-text">Adab Sebelum Ilmu</span>
        </div>
        <div class="hero-usp-card">
          <span class="usp-icon">💡</span>
          <span class="usp-text">Project-Based Learning</span>
        </div>
      </div>

      <a href="#programs" class="hero-cta mt-8">
        Lihat Program
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>


    <div class="hero-scroll-indicator">
      <div class="scroll-mouse"></div>
      <span>Scroll</span>
    </div>


  </header>

  <!-- ============ ABOUT SD ============ -->
  <section class="section-padding bg-gradient-subtle" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-image reveal-left">
          <img src="{{ asset('image/P1410680.JPG') }}" alt="Pembelajaran SD Alam" loading="lazy" />
        </div>
        <div class="about-content reveal-right">
          <span class="section-badge">Tentang SD Alam</span>
          <h3>SD Alam Sayf El Falah</h3>
          <p>SD Alam Sayf El Falah menghadirkan pengalaman belajar yang unik dengan mengintegrasikan kurikulum nasional, pendidikan agama Islam, dan konsep alam sebagai ruang belajar utama.</p>
          <p>Di sini, siswa tidak hanya belajar di dalam kelas, tetapi juga di alam terbuka — menumbuhkan semangat eksplorasi, kecintaan pada ilmu pengetahuan, dan kepedulian terhadap lingkungan.</p>
          <ul class="feature-list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Kurikulum Nasional + Islam Terpadu
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Pembelajaran Berbasis Alam
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Tahfidzul Qur'an
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              Life Skills & Leadership
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <!-- ============ VISI MISI SD ============ -->
  <section class="section-padding" id="visimisi">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Visi & Misi</span>
        <h2 class="section-title">Arah Pendidikan SD Alam</h2>
        <div class="section-line"></div>
      </div>

      <div class="visi-misi-grid">
        <div class="visi-card reveal-left">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <h3 class="card-title">Visi</h3>
          <p style="color:var(--gray-600);line-height:1.8;">Menjadi Sekolah yang membantu setiap anak tumbuh sesuai fitrahnya, hingga menjadi manusia utuh yang mampu menjadi pemimpin dan rahmat bagi dunia sesuai keinginan Allah Ta'ala dan Rasulullah shollallahu alaihi wa sallam.</p>
        </div>

        <div class="misi-card reveal-right">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
          </div>
          <h3 class="card-title">Misi</h3>
          <ul class="misi-list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Menyediakan metode pembelajaran yang mengembangkan dan menyentuh seluruh aspek dasar manusia meliputi akal, rasa, fisik, mental dan sosial</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Menjadi tempat tumbuh terbaik bagi anak di masa depan keemasannya dengan memberikan beragam pengalaman kehidupan yang dibutuhkan di masa depan</span>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <!-- ============ PROGRAM SD ============ -->
  <section class="section-padding bg-gradient-subtle" id="programs">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Program Kami</span>
        <h2 class="section-title">Program Unggulan SD Alam</h2>
        <div class="section-line"></div>
        <p class="section-desc">Kurikulum terpadu yang dirancang untuk menghasilkan siswa berprestasi, berakhlak mulia, dan berjiwa pemimpin.</p>
      </div>

      <div class="programs-mini-grid stagger-container">
        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </div>
            <h4 class="program-mini-title">Meet The Expert</h4>
            <p class="program-mini-desc">Hadirkan ahli dari berbagai profesi untuk berbagi wawasan dan inspirasi.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <h4 class="program-mini-title">Outbond</h4>
            <p class="program-mini-desc">Melatih kemandirian, kekompakan tim, dan kecintaan pada alam.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
            </div>
            <h4 class="program-mini-title">Happy Farming</h4>
            <p class="program-mini-desc">Belajar bercocok tanam dan memahami proses pertumbuhan tumbuhan.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            </div>
            <h4 class="program-mini-title">Camping</h4>
            <p class="program-mini-desc">Membangun karakter tangguh dan melatih keterampilan bertahan hidup.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            </div>
            <h4 class="program-mini-title">Animal Breeding</h4>
            <p class="program-mini-desc">Mengenalkan dunia peternakan dan menumbuhkan rasa empati.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h4 class="program-mini-title">Financial Literacy</h4>
            <p class="program-mini-desc">Mengajarkan konsep dasar mengelola uang dengan bijak.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            </div>
            <h4 class="program-mini-title">SASS (Sekolah Alam Student Scout)</h4>
            <p class="program-mini-desc">Pengembangan kepemimpinan dan kepedulian lingkungan ala pramuka.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line></svg>
            </div>
            <h4 class="program-mini-title">Digital, Internet & I.T</h4>
            <p class="program-mini-desc">Membekali siswa dengan keterampilan teknologi yang relevan dan aman.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            </div>
            <h4 class="program-mini-title">Leadership</h4>
            <p class="program-mini-desc">Melatih siswa untuk mengembangkan potensi kepemimpinan diri.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
            </div>
            <h4 class="program-mini-title">Talk To Investor</h4>
            <p class="program-mini-desc">Mengajarkan dasar kewirausahaan dan komunikasi dengan investor.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </div>
            <h4 class="program-mini-title">Story Telling Islamic History</h4>
            <p class="program-mini-desc">Menanamkan nilai luhur dari sejarah Islam melalui cerita.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            </div>
            <h4 class="program-mini-title">Fun Learning</h4>
            <p class="program-mini-desc">Menjadikan proses belajar menyenangkan dan interaktif bagi siswa.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h4 class="program-mini-title">Parents Mastermind</h4>
            <p class="program-mini-desc">Program kolaborasi untuk membantu orang tua dalam mendidik anak.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            </div>
            <h4 class="program-mini-title">Qailullah</h4>
            <p class="program-mini-desc">Menerapkan tidur siang yang singkat sesuai sunnah untuk mengembalikan energi.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line></svg>
            </div>
            <h4 class="program-mini-title">Quranic Based Curriculum</h4>
            <p class="program-mini-desc">Kurikulum yang mengintegrasikan nilai-nilai Al-Qur'an dalam setiap pelajaran.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ KURIKULUM ============ -->
  <section class="section-padding bg-gradient-subtle" id="curriculum">
    <div class="container">
      <div class="reveal-scale flex justify-center">
         <div class="gallery-item cursor-pointer rounded-2xl overflow-hidden shadow-lg relative group max-w-3xl w-full mx-auto" style="aspect-ratio: auto; height: auto;">
             <picture>
                 <source media="(min-width: 768px)" srcset="{{ asset('image/kurikulumsdlandscape.svg') }}">
                 <img src="{{ asset('image/Kurikulum-sd.svg') }}" alt="Kurikulum SD Alam Sayf El Falah" class="w-full h-auto transition-transform duration-500 group-hover:scale-105" style="object-fit: contain; height: auto;" loading="lazy">
             </picture>
             <div class="gallery-zoom-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
             </div>
         </div>
      </div>
    </div>
  </section>

  <!-- ============ SCHOOL NEWS SLIDER ============ -->
  <x-news-slider :news="$news" />

  <!-- ============ SPMB & BIAYA PENDIDIKAN SD ============ -->
  <section class="section-padding bg-gradient-subtle" id="pendaftaran">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Informasi SPMB & Biaya</span>
        <h2 class="section-title">Biaya Pendidikan SD Alam Selfa</h2>
        <div class="section-line"></div>
        <p class="section-desc">
          Transparansi investasi pendidikan terpadu berbasis alam dan Al-Qur'an untuk menumbuhkan fitrah kepemimpinan, adab, dan kemandirian ananda.
        </p>
      </div>

      <div class="program-spmb-wrapper reveal-scale">
        <div class="program-spmb-card is-featured">
          <!-- Main Left Column -->
          <div class="program-spmb-main">
            <span class="program-spmb-badge regular">
              <span class="program-spmb-badge-dot"></span>
              Pendidikan Dasar Islami • Sekolah Alam
            </span>
            <h3 class="program-spmb-title">{{ $admissionFee?->title ?? 'SD Alam Sayf El Falah' }}</h3>
            <p class="program-spmb-desc">
              Membentuk generasi pemimpin berkarakter Qur'ani yang tangguh dan cerdas secara akademis, melalui perpaduan kurikulum nasional, diniyyah intensif, dan eksplorasi alam terbuka.
            </p>

            <!-- Metric Grid: 3 Boxes Side by Side -->
            <div class="program-metric-grid">
              <div class="program-metric-box">
                <span class="metric-label">Uang Pangkal / Masuk</span>
                <span class="metric-value">{{ $admissionFee?->formatted_enrollment_fee ?? 'Rp 4.500.000' }}</span>
                <span class="metric-sub">Investasi Awal Jenjang SD</span>
              </div>
              <div class="program-metric-box">
                <span class="metric-label">SPP Bulanan</span>
                <span class="metric-value">{{ $admissionFee?->formatted_monthly_tuition ?? 'Rp 400.000' }}</span>
                <span class="metric-sub">Per bulan (Inklusif)</span>
              </div>
              <div class="program-metric-box">
                <span class="metric-label">Formulir Pendaftaran</span>
                <span class="metric-value" style="font-size:1.05rem; color:#1e293b;">{{ $admissionFee?->formatted_registration_fee ?? 'Rp 200.000' }}</span>
                <span class="metric-sub">Registrasi Calon Santri</span>
              </div>
            </div>

            @if($admissionFee?->uniform_fee)
              <div style="display:inline-flex; align-items:center; gap:0.5rem; background:#f8fafc; border:1px solid #e2e8f0; padding:0.4rem 0.85rem; border-radius:0.6rem; font-size:0.82rem; color:#475569; margin-bottom:1rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"></path></svg>
                <span>Seragam & Perlengkapan: <strong>{{ $admissionFee->formatted_uniform_fee }}</strong></span>
              </div>
            @endif

            <!-- Features Grid -->
            @if(!empty($admissionFee?->features))
              <div class="program-features-section">
                <span class="program-features-heading">Fasilitas & Keunggulan Program:</span>
                <div class="program-features-grid">
                  @foreach($admissionFee->features as $feat)
                    <div class="program-feature-item">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                      <span>{{ $feat }}</span>
                    </div>
                  @endforeach
                </div>
              </div>
            @endif

            @if($admissionFee?->notes)
              <p class="program-spmb-notes">* {{ $admissionFee->notes }}</p>
            @endif
          </div>

          <!-- Side Action Card -->
          <div class="program-spmb-side">
            <div class="program-spmb-wave-card">
              <span class="spmb-wave-badge">{{ $admissionWave?->wave_name ?? 'SPMB TA 2026/2027' }}</span>
              <h4 class="spmb-wave-name">Pendaftaran Santri Baru SD</h4>
              <div class="spmb-wave-date-range">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                <span>
                  @if($admissionWave && $admissionWave->start_date && $admissionWave->end_date)
                    {{ $admissionWave->start_date->format('d M') }} — {{ $admissionWave->end_date->format('d M Y') }}
                  @else
                    Pendaftaran Sedang Dibuka
                  @endif
                </span>
              </div>

              <ul class="program-quick-checklist">
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Usia Kelas 1 SD: Minimal 6 Tahun per Juli</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Fotokopi Akta Kelahiran & Kartu Keluarga (2 lembar)</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Pas foto 3x4 (3 lembar) & Fotokopi KTP Orang Tua</span>
                </li>
              </ul>
            </div>

            <div class="program-spmb-actions">
              @php
                $sdWa = $admissionWave?->clean_whatsapp ?? '6282122073707';
                $sdMsg = rawurlencode('Bismillah Ustadz, saya ingin mendaftar dan menanyakan rincian pendaftaran SD Alam Sayf El Falah.');
              @endphp
              <a href="https://wa.me/{{ $sdWa }}?text={{ $sdMsg }}" target="_blank" rel="noopener noreferrer" class="btn-spmb-wa">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Konsultasi & Daftar SD (WhatsApp)
              </a>
              @if($admissionWave?->brochure_file)
                <a href="{{ asset('storage/' . $admissionWave->brochure_file) }}" target="_blank" class="btn-spmb-pdf">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="12" x2="12" y2="3"></line></svg>
                  Unduh Brosur SD (PDF)
                </a>
              @endif
              <div class="program-spmb-guarantee">
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                <span>Panitia PPDB siap melayani pertanyaan Ayah & Bunda</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ STATISTICS ============ -->
  <section class="stats-section section-padding">
    <div class="stats-bg">
      <img src="{{ asset('image/gedungSd.jpg') }}" alt="Background" loading="lazy" />
    </div>
    <div class="stats-overlay"></div>
    <div class="container relative z-10">
      <div class="stats-grid">
        <div class="stat-item reveal-scale">
          <div class="stat-number" data-target="100" data-suffix="+">0</div>
          <div class="stat-label">Siswa Aktif</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 100ms;">
          <div class="stat-number" data-target="20" data-suffix="+">0</div>
          <div class="stat-label">Tenaga Pengajar</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 200ms;">
          <div class="stat-number" data-target="10" data-suffix="">0</div>
          <div class="stat-label">Program Unggulan</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 300ms;">
          <div class="stat-number" data-target="15" data-suffix="+">0</div>
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
        <h2 class="section-title">Kegiatan SD Alam</h2>
        <div class="section-line"></div>
      </div>

      <div class="gallery-grid stagger-container">
        @forelse($galleries as $gallery)
        <div class="gallery-item stagger-item">
          <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" loading="lazy" />
          <div class="gallery-zoom-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg></div>
        </div>
        @empty
        <div class="col-span-full text-center py-5">
            <p class="text-gray-500">Belum ada foto galeri.</p>
        </div>
        @endforelse
      </div>
    </div>

  </section>

  <!-- ============ CONTACT ============ -->
  <section class="section-padding bg-gradient-subtle" id="contact">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Kontak</span>
        <h2 class="section-title">Hubungi SD Alam Selfa</h2>
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
              <p>Jl. Ki Ageng Selo, Krasakan, Jebugan, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57433</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div>
              <h4>Telepon</h4>
              <p>{{ $admissionWave?->whatsapp_number ?? '0821-2207-3707' }} (WhatsApp)</p>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <h4>Email</h4>
              <p>info@sayfelfalah.sch.id</p>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.002754723333!2d110.59855107326445!3d-7.682850676058566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a435be390e88f%3A0x56c6df479b7dcb9!2sSekolah%20Alam%20Selfa!5e0!3m2!1sid!2sid!4v1756700327534!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi SD Alam Sayf El Falah" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection

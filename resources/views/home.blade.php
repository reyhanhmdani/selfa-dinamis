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
      <p class="hero-subtitle">Sekolah Alam & Pondok Pesantren</p>
      <h1 class="hero-title">Sayf El Falah</h1>
      <p class="hero-desc">
        Membentuk generasi pemimpin yang hafal Al-Qur'an, beradab mulia, cerdas akademis, dan tangguh di alam. Pendidikan terpadu berbasis Al-Qur'an dan Sunnah untuk masa depan ananda.
      </p>

      <div class="hero-actions">
        @php
          $waNumber = $admissionWave?->clean_whatsapp ?? '6282122073707';
          $waMsg = rawurlencode('Bismillah Ustadz/Panitia PPDB, saya ingin menanyakan pendaftaran santri baru di Sayf El Falah.');
        @endphp
        <a href="https://wa.me/{{ $waNumber }}?text={{ $waMsg }}" target="_blank" rel="noopener noreferrer" class="hero-cta hero-cta-wa">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          Konsultasi PPDB (WhatsApp)
        </a>

        <a href="#biaya" class="hero-cta hero-cta-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          Biaya & Pendaftaran
        </a>
      </div>
    </div>

    <div class="hero-scroll-indicator">
      <div class="scroll-mouse"></div>
      <span>Scroll</span>
    </div>
  </header>

  <!-- ============ TRUST BAR SECTION ============ -->
  <section class="trust-bar-section">
    <div class="container">
      <div class="trust-bar-grid">
        <div class="trust-item reveal-scale">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"></path><path d="M6 6h10"></path><path d="M6 10h10"></path></svg>
          </div>
          <div class="trust-text">
            <h4>Aqidah & Sunnah</h4>
            <p>Pembiasaan ibadah shahihah & adab nabawiyyah sejak dini</p>
          </div>
        </div>

        <div class="trust-item reveal-scale" style="transition-delay: 100ms;">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
          </div>
          <div class="trust-text">
            <h4>Tahfidz Bersanad</h4>
            <p>Target mutqin dari Juz 30 hingga 30 Juz secara bertahap</p>
          </div>
        </div>

        <div class="trust-item reveal-scale" style="transition-delay: 200ms;">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          </div>
          <div class="trust-text">
            <h4>Pendidikan Alam</h4>
            <p>Mengasah fitrah, kepemimpinan & lifeskill di alam terbuka</p>
          </div>
        </div>

        <div class="trust-item reveal-scale" style="transition-delay: 300ms;">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          </div>
          <div class="trust-text">
            <h4>Kampus Terpisah</h4>
            <p>Lingkungan aman dengan pemisahan ikhwan & akhwat</p>
          </div>
        </div>
      </div>
    </div>
  </section>

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
        <a href="{{ route('program.kbtk') }}" class="program-card stagger-item">
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
        <a href="{{ route('program.sd') }}" class="program-card stagger-item">
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
        <a href="{{ route('program.ponpes') }}" class="program-card stagger-item">
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

  <!-- ============ SPMB & BIAYA PENDIDIKAN ============ -->
  <section class="section-padding bg-gradient-subtle" id="biaya">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Informasi SPMB & PPDB</span>
        <h2 class="section-title">Biaya Pendidikan & Pendaftaran</h2>
        <div class="section-line"></div>
        <p class="section-desc">
          Transparansi biaya pendidikan untuk tahun ajaran baru. Investasi terbaik untuk pendidikan adab, tahfidz, dan masa depan ananda.
        </p>
      </div>

      @if($admissionWave && $admissionWave->is_active)
        <div class="spmb-banner-card reveal-scale">
          <div class="spmb-banner-content">
            <div class="spmb-banner-header">
              <span class="spmb-status-pill">Pendaftaran Dibuka</span>
              <h3 class="spmb-wave-title">{{ $admissionWave->wave_name }}</h3>
            </div>
            @if($admissionWave->announcement)
              <p class="spmb-banner-desc">{{ $admissionWave->announcement }}</p>
            @endif
            @if($admissionWave->start_date && $admissionWave->end_date)
              <div class="spmb-banner-date">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                <span>Periode: <strong>{{ $admissionWave->start_date->format('d M Y') }}</strong> s.d <strong>{{ $admissionWave->end_date->format('d M Y') }}</strong></span>
              </div>
            @endif
          </div>

          <div class="spmb-banner-actions">
            @if($admissionWave->brochure_file)
              <a href="{{ asset('storage/' . $admissionWave->brochure_file) }}" target="_blank" class="spmb-btn spmb-btn-brochure">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
                Unduh Brosur (PDF)
              </a>
            @endif
            <a href="https://wa.me/{{ $admissionWave->clean_whatsapp }}?text={{ rawurlencode('Bismillah Ustadz, saya ingin mendaftarkan anak saya untuk ' . $admissionWave->wave_name) }}" target="_blank" rel="noopener noreferrer" class="spmb-btn spmb-btn-daftar">
              Daftar Sekarang
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      @endif

      <!-- Grid Kartu Biaya Per Jenjang -->
      @if($admissionFees->isNotEmpty())
        <div class="fees-grid stagger-container">
          @foreach($admissionFees as $fee)
            <div class="fee-card stagger-item {{ $fee->program_type === 'sd' ? 'featured' : '' }} {{ $fee->is_free ? 'fee-card-free' : '' }}">
              @if($fee->program_type === 'sd')
                <div class="fee-featured-badge">Paling Diminati</div>
              @elseif($fee->is_free)
                <div class="fee-featured-badge" style="background:#0284c7;">100% Beasiswa</div>
              @endif
              <div class="fee-card-header">
                <span class="fee-program-type">
                  @if($fee->program_type === 'kbtk') KB & TK
                  @elseif($fee->program_type === 'sd') SD Alam
                  @else Pondok Pesantren
                  @endif
                </span>
                <h3 class="fee-program-title">{{ $fee->title }}</h3>
              </div>

              <div class="fee-pricing-box">
                @if($fee->is_free)
                  <span class="fee-label">Biaya Pendidikan Santri</span>
                  <div class="fee-amount" style="color:#059669; font-size:2rem;">GRATIS</div>
                  <div class="fee-monthly">
                    <span style="color:#047857; font-weight:600;">Beasiswa Penuh (Free SPP & Asrama)</span>
                  </div>
                @else
                  <span class="fee-label">Uang Pangkal / Masuk</span>
                  <div class="fee-amount">{{ $fee->formatted_enrollment_fee }}</div>
                  <div class="fee-monthly">
                    <span>SPP: <strong>{{ $fee->formatted_monthly_tuition }}</strong> / bulan</span>
                  </div>
                @endif
              </div>

              <div class="fee-details-list">
                <div class="fee-detail-row">
                  <span>Biaya Formulir Pendaftaran:</span>
                  <strong>{{ $fee->formatted_registration_fee }}</strong>
                </div>
                @if($fee->is_free)
                  <div class="fee-detail-row">
                    <span>Asrama & Konsumsi 3x Sehari:</span>
                    <strong style="color:#059669;">Gratis (Ditanggung)</strong>
                  </div>
                @elseif($fee->uniform_fee)
                  <div class="fee-detail-row">
                    <span>Seragam & Perlengkapan:</span>
                    <strong>{{ $fee->formatted_uniform_fee }}</strong>
                  </div>
                @endif
              </div>

              @if(!empty($fee->features))
                <div class="fee-features-box">
                  <span class="fee-features-title">Fasilitas Termasuk:</span>
                  <ul class="fee-features-list">
                    @foreach($fee->features as $feature)
                      <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span>{{ $feature }}</span>
                      </li>
                    @endforeach
                  </ul>
                </div>
              @endif

              @if($fee->notes)
                <p class="fee-notes">* {{ $fee->notes }}</p>
              @endif

              <div class="fee-card-action">
                <a href="https://wa.me/{{ $admissionWave?->clean_whatsapp ?? '6282122073707' }}?text={{ rawurlencode('Bismillah Ustadz, saya ingin menanyakan rincian pendaftaran untuk jenjang ' . $fee->title) }}" target="_blank" rel="noopener noreferrer" class="fee-cta-btn">
                  {{ $fee->is_free ? 'Konsultasi Beasiswa Ponpes' : 'Konsultasi Jenjang Ini' }}
                </a>
              </div>
            </div>
          @endforeach
        </div>
      @endif
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
              <p>0821-2207-3707 (WhatsApp)</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <!-- Email Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div>
              <h4>Email</h4>
              <p>info@sayfelfalah.sch.id</p>
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

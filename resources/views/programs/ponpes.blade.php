@extends('layouts.app')

@section('title', 'Ponpes Sayf El Falah')

@section('content')
  <!-- ============ HERO ============ -->
  <header class="hero">
    <div class="hero-bg">
      <img src="{{ asset('image/asramaputra2.jpg') }}" alt="Asrama Putra Ponpes Sayf El Falah" fetchpriority="high" />
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>

    <div class="hero-content">
      <div class="hero-subtitle">Leader & Hafiz</div>
      <h1 class="hero-title">Ponpes Selfa</h1>
      <p class="hero-desc">Menyiapkan pemuda tangguh yang tidak hanya hafal Al-Qur'an, tapi juga siap memimpin peradaban dengan bekal ilmu syar'i dan kompetensi global.</p>

      <!-- USP Cards (Hook) -->
      <div class="hero-usp-grid">
        <div class="hero-usp-card">
          <span class="usp-icon">📜</span>
          <span class="usp-text">Sanad Al-Qur'an</span>
        </div>
        <div class="hero-usp-card">
          <span class="usp-icon">🚀</span>
          <span class="usp-text">Entrepreneurship</span>
        </div>
        <div class="hero-usp-card">
          <span class="usp-icon">🌍</span>
          <span class="usp-text">Bahasa & Teknologi</span>
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

  <!-- ============ ABOUT PONPES ============ -->
  <section class="section-padding bg-gradient-subtle" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-image reveal-left">
          <img src="{{ !empty($profile->about_image) ? Storage::url($profile->about_image) : asset('image/ponpes/01JWWX3MRAJGRTSGPDKH3VR5Y8.jpg') }}" alt="Pondok Pesantren Sayf El Falah" loading="lazy" />
        </div>
        <div class="about-content reveal-right">
          <span class="section-badge">Tentang Ponpes</span>
          <h3>{{ $profile->about_title ?? 'Pondok Pesantren Sayf El Falah' }}</h3>
          @if($profile && !empty($profile->about_text))
            @foreach(explode("\n\n", str_replace("\r\n", "\n", $profile->about_text)) as $paragraph)
              @if(!empty(trim($paragraph)))
                <p>{{ trim($paragraph) }}</p>
              @endif
            @endforeach
          @else
            <p>Pondok Pesantren Sayf El Falah adalah lembaga pendidikan Islam modern yang menggabungkan tradisi pesantren salaf dengan pendidikan formal berkualitas.</p>
            <p>Santri mendapatkan pembinaan intensif dalam bidang agama, akademik, dan keterampilan hidup, sehingga siap menjadi generasi yang mandiri dan berdaya saing.</p>
          @endif
          <ul class="feature-list">
            @if($profile && !empty($profile->feature_list))
              @foreach($profile->feature_list as $feature)
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                  {{ $feature }}
                </li>
              @endforeach
            @else
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                Tahfidzul Qur'an 30 Juz
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                Bahasa Arab & Inggris Aktif
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                Pendidikan Kepemimpinan
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                Asrama Full-Boarding
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ VISI MISI PONPES ============ -->
  <section class="section-padding" id="visimisi">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Visi & Misi</span>
        <h2 class="section-title">{{ $profile->badge ?? 'Arah Pendidikan Ponpes' }}</h2>
        <div class="section-line"></div>
      </div>

      <div class="visi-misi-grid">
        <div class="visi-card reveal-left">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <h3 class="card-title">Visi</h3>
          <p style="color:var(--gray-600);line-height:1.8;">{{ $profile->vision ?? 'Menjadi lembaga pendidikan Islam terdepan yang mencetak generasi beriman dan bertakwa kepada Allah, serta memiliki karakter yang kuat dan dapat dipercaya (Al-Qawoiyyul Amiin).' }}</p>
        </div>

        <div class="misi-card reveal-right">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
          </div>
          <h3 class="card-title">Misi</h3>
          <ul class="misi-list">
            @if($profile && !empty($profile->mission_list))
              @foreach($profile->mission_list as $mission)
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>{{ $mission }}</span>
                </li>
              @endforeach
            @else
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Membentuk santri yang sehat jasmani dan rohani berdasarkan Qur'an dan Sunnah</span>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Mencetak santri yang mandiri, kreatif, inovatif, dan memiliki jiwa kepimpinan untuk berperan aktif di tengah masyarakat</span>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Menjadi lembaga pendidikan Islam yang dekat dan bermanfaat bagi seluruh lapisan masyarakat</span>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Menyelenggarakan pendidikan yang berkualitas dengan metode dan sarana yang selalu mengikuti perkembangan zaman dengan menjunjung tinggi nilai-nilai keislamian</span>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROGRAM PONPES ============ -->
  <section class="section-padding bg-gradient-subtle" id="programs">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Program Kami</span>
        <h2 class="section-title">Program Unggulan Ponpes</h2>
        <div class="section-line"></div>
        <p class="section-desc">Program pembinaan intensif yang dirancang untuk membentuk santri yang berilmu, berakhlak, dan berdaya saing global.</p>
      </div>

      <div class="stagger-container stagger-3d grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </div>
            <h4 class="program-mini-title">Tahfidzul Qur'an</h4>
            <p class="program-mini-desc">Program menghafal Al-Qur'an dengan metode yang sistematis dan terstruktur, didukung oleh guru-guru yang berpengalaman.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
            </div>
            <h4 class="program-mini-title">Bahasa Arab & Inggris</h4>
            <p class="program-mini-desc">Program penguasaan bahasa Arab dan Inggris sebagai alat untuk memahami ilmu agama dan komunikasi global.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </div>
            <h4 class="program-mini-title">Leadership / Nisaiyyah</h4>
            <p class="program-mini-desc">Program pembinaan kepemimpinan dan karakter khusus untuk santri, mengembangkan soft skills dan jiwa kepemimpinan Islami.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
            </div>
            <h4 class="program-mini-title">Kitabiyah / Diniyah</h4>
            <p class="program-mini-desc">Pembelajaran kitab-kitab klasik (turats) dan ilmu-ilmu keislaman seperti fiqh, hadits, tafsir, dan akidah.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            </div>
            <h4 class="program-mini-title">Mulazamah Sains Qur'an</h4>
            <p class="program-mini-desc">Program integrasi antara ilmu sains modern dan Al-Qur'an, mengajarkan santri untuk memahami fenomena alam dan teknologi melalui perspektif Al-Qur'an.</p>
          </div>
        </div>

        <div class="program-mini-card stagger-item">
          <div class="program-mini-bg"></div>
          <div class="program-mini-content">
            <div class="program-mini-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line></svg>
            </div>
            <h4 class="program-mini-title">Santri Preuner</h4>
            <p class="program-mini-desc">Program kewirausahaan untuk melatih santri menjadi pribadi mandiri dan kreatif, dengan pembekalan keterampilan bisnis berbasis syariah.</p>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- ============ SCHOOL NEWS SLIDER ============ -->
  <x-news-slider :news="$news" />

  <!-- ============ SPMB & BEASISWA PENDIDIKAN PONPES ============ -->
  <section class="section-padding bg-gradient-subtle" id="biaya">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-badge">Program Beasiswa Santri</span>
        <h2 class="section-title">Pendidikan & Asrama 100% Gratis</h2>
        <div class="section-line"></div>
        <p class="section-desc">
          Sayf El Falah mendedikasikan program beasiswa penuh untuk mencetak generasi hafidz Al-Qur'an 30 Juz yang tangguh, beradab, dan mandiri tanpa pungutan biaya pendidikan.
        </p>
      </div>

      <div class="program-spmb-wrapper reveal-scale">
        <div class="program-spmb-card is-scholarship">
          <!-- Main Left Column -->
          <div class="program-spmb-main">
            <span class="program-spmb-badge scholarship">
              <span class="program-spmb-badge-dot"></span>
              Khidmah Umat • Beasiswa Penuh
            </span>
            <h3 class="program-spmb-title">Pondok Pesantren Sayf El Falah</h3>
            <p class="program-spmb-desc">
              Pendidikan pondok pesantren terpadu berbasis Al-Qur'an dan Sunnah. Santri dibina secara intensif selama 24 jam dengan fasilitas asrama nyaman dan lingkungan yang terjaga.
            </p>

            <!-- Scholarship Highlight Banner -->
            <div class="scholarship-highlight-banner">
              <span class="scholarship-badge-pill">100% Full Scholarship</span>
              <div class="scholarship-amount-headline">BEBAS BIAYA</div>
              <p class="scholarship-tagline">Seluruh biaya pendidikan, tempat tinggal, dan konsumsi santri ditanggung penuh oleh yayasan.</p>
              
              <div class="scholarship-pills-row">
                <div class="scholarship-item-pill">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Bebas Uang Pangkal</span>
                </div>
                <div class="scholarship-item-pill">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Bebas SPP / Syahriah</span>
                </div>
                <div class="scholarship-item-pill">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Asrama & Makan 3x Sehari Gratis</span>
                </div>
              </div>
            </div>

            <!-- Features Grid -->
            <div class="program-features-section">
              <span class="program-features-heading">Fasilitas & Kurikulum Santri:</span>
              <div class="program-features-grid">
                <div class="program-feature-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Target Tahfidz 30 Juz Mutqin Bersanad</span>
                </div>
                <div class="program-feature-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Kajian Kitab Kuning & Dirasah Islamiyyah</span>
                </div>
                <div class="program-feature-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Bahasa Arab & Inggris Aktif Harian</span>
                </div>
                <div class="program-feature-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Asrama Nyaman & Bimbingan Ustadz 24 Jam</span>
                </div>
                <div class="program-feature-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Lifeskills, Kemandirian, dan Kepemimpinan</span>
                </div>
                <div class="program-feature-item">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Kampus Ikhwan & Akhwat Terpisah</span>
                </div>
              </div>
            </div>

            <p class="program-spmb-notes">* Kuota santri beasiswa terbatas setiap gelombang demi menjaga kualitas bimbingan intensif.</p>
          </div>

          <!-- Side Action Card -->
          <div class="program-spmb-side">
            <div class="program-spmb-wave-card">
              <span class="spmb-wave-badge">{{ $admissionWave?->wave_name ?? 'SPMB TA 2026/2027' }}</span>
              <h4 class="spmb-wave-name">Pendaftaran Santri Baru</h4>
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

              @if(!empty($admissionFee?->requirements) && count($admissionFee->requirements) > 0)
                <ul class="program-quick-checklist">
                  @foreach($admissionFee->requirements as $req)
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                      <span>{{ $req }}</span>
                    </li>
                  @endforeach
                </ul>
              @elseif(!empty($admissionWave?->announcement))
                <div class="program-spmb-side-announcement">
                  <p>{{ $admissionWave->announcement }}</p>
                </div>
              @endif
            </div>

            <div class="program-spmb-actions">
              @php
                $ponpesWa = $admissionWave?->clean_whatsapp ?? '6282122073707';
                $ponpesMsg = rawurlencode('Bismillah Ustadz, saya ingin mendaftar dan menanyakan informasi beasiswa santri baru di Pondok Pesantren Sayf El Falah.');
              @endphp
              <a href="https://wa.me/{{ $ponpesWa }}?text={{ $ponpesMsg }}" target="_blank" rel="noopener noreferrer" class="btn-spmb-wa">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Daftar Beasiswa via WhatsApp
              </a>
              @if($admissionWave?->brochure_file)
                <a href="{{ asset('storage/' . $admissionWave->brochure_file) }}" target="_blank" class="btn-spmb-pdf">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="12" x2="12" y2="3"></line></svg>
                  Unduh Brosur Ponpes (PDF)
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
      <img src="{{ asset('image/asramaputra1.jpg') }}" alt="Background" loading="lazy" />
    </div>
    <div class="stats-overlay"></div>
    <div class="container relative z-10">
      <div class="stats-grid">
        <div class="stat-item reveal-scale">
          <div class="stat-number" data-target="80" data-suffix="">0</div>
          <div class="stat-label">Santri Mukim</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 100ms;">
          <div class="stat-number" data-target="15" data-suffix="+">0</div>
          <div class="stat-label">Ustadz/Ustadzah</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 200ms;">
          <div class="stat-number" data-target="5" data-suffix="">0</div>
          <div class="stat-label">Program Unggulan</div>
        </div>
        <div class="stat-item reveal-scale" style="transition-delay: 300ms;">
          <div class="stat-number" data-target="8" data-suffix="+">0</div>
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
        <h2 class="section-title">Kegiatan Ponpes</h2>
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
        <h2 class="section-title">Hubungi Ponpes Selfa</h2>
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
              <p>Jl. Wahidin Sudiro Husodo Gang VIII Plosoarum, Sekarsuli, Kec. Klaten utara, Kab. Klaten</p>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.002754723333!2d110.59855107326445!3d-7.682850676058566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a435be390e88f%3A0x56c6df479b7dcb9!2sSekolah%20Alam%20Selfa!5e0!3m2!1sid!2sid!4v1756700327534!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Ponpes Sayf El Falah" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection

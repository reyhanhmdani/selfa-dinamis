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
      <div class="hero-subtitle">Selamat Datang di Ponpes</div>
      <h1 class="hero-title">Sayf El Falah</h1>
      <p class="hero-desc">Pondok Pesantren Sayf El Falah adalah lembaga pendidikan Islam yang berkomitmen mencetak generasi beriman, bertakwa, dan berakhlak mulia.</p>
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

  <!-- ============ ABOUT PONPES ============ -->
  <section class="section-padding bg-gradient-subtle" id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-image reveal-left">
          <img src="{{ asset('image/ponpes/01JWWX3MRAJGRTSGPDKH3VR5Y8.jpg') }}" alt="Pondok Pesantren Sayf El Falah" loading="lazy" />
        </div>
        <div class="about-content reveal-right">
          <span class="section-badge">Tentang Ponpes</span>
          <h3>Pondok Pesantren Sayf El Falah</h3>
          <p>Pondok Pesantren Sayf El Falah adalah lembaga pendidikan Islam modern yang menggabungkan tradisi pesantren salaf dengan pendidikan formal berkualitas.</p>
          <p>Santri mendapatkan pembinaan intensif dalam bidang agama, akademik, dan keterampilan hidup, sehingga siap menjadi generasi yang mandiri dan berdaya saing.</p>
          <ul class="feature-list">
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
        <h2 class="section-title">Arah Pendidikan Ponpes</h2>
        <div class="section-line"></div>
      </div>

      <div class="visi-misi-grid">
        <div class="visi-card reveal-left">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
          </div>
          <h3 class="card-title">Visi</h3>
          <p style="color:var(--gray-600);line-height:1.8;">Menjadi lembaga pendidikan Islam terdepan yang mencetak generasi beriman dan bertakwa kepada Allah, serta memiliki karakter yang kuat dan dapat dipercaya (Al-Qawoiyyul Amiin).</p>
        </div>

        <div class="misi-card reveal-right">
          <div class="card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
          </div>
          <h3 class="card-title">Misi</h3>
          <ul class="misi-list">
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
  <x-news-slider />

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
              <p>(+62) 813 3111 9072</p>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.002754723333!2d110.59855107326445!3d-7.682850676058566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a435be390e88f%3A0x56c6df479b7dcb9!2sSekolah%20Alam%20Selfa!5e0!3m2!1sid!2sid!4v1756700327534!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Ponpes Sayf El Falah" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
@endsection

@extends('layouts.app')

@section('title', 'Berita & Kegiatan - Sayf El Falah')

@section('content')
  <!-- ============ HERO BANNER ============ -->
  <section class="news-page-hero">
    <div class="news-page-hero-bg">
      <div class="news-page-hero-overlay"></div>
      <div class="news-page-hero-pattern"></div>
    </div>
    <div class="container">
      <div class="news-page-hero-content">
        <span class="section-badge">Kabar Terbaru</span>
        <h1 class="news-page-hero-title">Berita & Kegiatan</h1>
        <p class="news-page-hero-desc">Ikuti perkembangan terbaru dari kegiatan dan prestasi Sayf El Falah</p>
      </div>
    </div>
  </section>

  <!-- ============ NEWS GRID ============ -->
  <section class="news-page-section">
    <div class="container">
      @if($news->count() > 0)
        <!-- Featured Article (first item) -->
        @php $featured = $news->first(); @endphp
        <article class="news-featured reveal">
          <a href="{{ route('berita.show', $featured->slug) }}" class="news-featured-link">
            <div class="news-featured-image">
              <img src="{{ $featured->image ? asset('storage/' . $featured->image) : asset('image/placeholder.jpg') }}" alt="{{ $featured->title }}" loading="lazy" />
              <div class="news-featured-overlay"></div>
              <span class="news-featured-badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                Terbaru
              </span>
            </div>
            <div class="news-featured-body">
              <time class="news-meta-date" datetime="{{ $featured->published_at->toDateString() }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                {{ $featured->published_at->translatedFormat('d F Y') }}
              </time>
              <h2 class="news-featured-title">{{ $featured->title }}</h2>
              <p class="news-featured-excerpt">{{ Str::limit(strip_tags($featured->content), 200) }}</p>
              <span class="news-card-cta">
                Baca Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </span>
            </div>
          </a>
        </article>

        <!-- Rest of articles -->
        @if($news->count() > 1)
        <div class="news-grid stagger-container">
          @foreach($news->skip(1) as $item)
          <article class="news-grid-card stagger-item">
            <a href="{{ route('berita.show', $item->slug) }}" class="news-grid-card-link">
              <div class="news-grid-card-image">
                <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('image/placeholder.jpg') }}" alt="{{ $item->title }}" loading="lazy" />
                <div class="news-grid-card-image-overlay"></div>
              </div>
              <div class="news-grid-card-body">
                <time class="news-meta-date" datetime="{{ $item->published_at->toDateString() }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  {{ $item->published_at->translatedFormat('d F Y') }}
                </time>
                <h3 class="news-grid-card-title">{{ $item->title }}</h3>
                <p class="news-grid-card-excerpt">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                <span class="news-card-cta">
                  Baca Selengkapnya
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </span>
              </div>
            </a>
          </article>
          @endforeach
        </div>
        @endif

        <!-- Pagination -->
        @if($news->hasPages())
        <div class="news-pagination">
          {{ $news->links() }}
        </div>
        @endif

      @else
        <div class="news-empty reveal">
          <div class="news-empty-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          </div>
          <h3>Belum Ada Berita</h3>
          <p>Berita dan kegiatan terbaru akan segera hadir. Nantikan informasi selanjutnya!</p>
          <a href="{{ route('home') }}" class="hero-cta" style="display:inline-flex;margin-top:1rem;">
            Kembali ke Beranda
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
          </a>
        </div>
      @endif
    </div>
  </section>
@endsection

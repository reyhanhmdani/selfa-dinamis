@php
  $news = $news ?? \App\Models\News::published()->latest('published_at')->take(5)->get();
@endphp

  <!-- ============ SCHOOL NEWS SLIDER ============ -->
  <section class="news-section" id="news">
    <div class="container">
      <div class="news-header reveal">
        <span class="section-badge">Kabar Sekolah</span>
        <h2 class="section-title">Berita & Kegiatan Terbaru</h2>
        <div class="section-line"></div>
      </div>

      @if($news->isNotEmpty())
      <div class="news-slider-container reveal-scale">
        <div class="news-track">
          @foreach($news as $item)
          <div class="news-card">
            <div class="news-image-wrapper">
              <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('image/placeholder.jpg') }}" alt="{{ $item->title }}" class="news-image" loading="lazy">
              <span class="news-date-badge">{{ $item->published_at->format('d M Y') }}</span>
            </div>
            <div class="news-content">
              <h3 class="news-title">{{ $item->title }}</h3>
              <p class="news-excerpt">{{ Str::limit(strip_tags($item->content), 100) }}</p>
              <a href="{{ route('berita.show', $item->slug) }}" class="news-read-more">
                Baca Selengkapnya 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @else
      <div class="news-empty-state reveal" style="text-align:center;padding:3rem 1rem;">
        <p style="color:var(--gray-400);font-size:0.95rem;">Belum ada berita terbaru.</p>
      </div>
      @endif
    </div>
  </section>

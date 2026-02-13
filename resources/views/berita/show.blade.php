@extends('layouts.app')

@section('title', $news->title . ' - Sayf El Falah')

@section('content')
  <!-- ============ ARTICLE HEADER ============ -->
  <article class="article-page">
    <header class="article-header">
      <div class="article-header-bg">
        <img src="{{ $news->image ? asset('storage/' . $news->image) : asset('image/placeholder.jpg') }}" alt="{{ $news->title }}" />
        <div class="article-header-overlay"></div>
      </div>
      <div class="container">
        <div class="article-header-content">
          <a href="{{ route('berita.index') }}" class="article-back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali ke Berita
          </a>
          <div class="article-meta">
            <time class="article-meta-date" datetime="{{ $news->published_at->toDateString() }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              {{ $news->published_at->translatedFormat('d F Y') }}
            </time>
          </div>
          <h1 class="article-title">{{ $news->title }}</h1>
        </div>
      </div>
    </header>

    <!-- ============ ARTICLE BODY ============ -->
    <div class="article-body-wrapper">
      <div class="container">
        <div class="article-layout">
          <div class="article-content reveal">
            <div class="article-prose">
              {!! $news->content !!}
            </div>

            <!-- Share Buttons -->
            <div class="article-share">
              <span class="article-share-label">Bagikan:</span>
              <div class="article-share-buttons">
                <a href="https://wa.me/?text={{ urlencode($news->title . ' - ' . url()->current()) }}" target="_blank" rel="noopener" class="article-share-btn article-share-wa" title="WhatsApp">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" rel="noopener" class="article-share-btn article-share-fb" title="Facebook">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <button onclick="navigator.clipboard.writeText(window.location.href);this.classList.add('copied')" class="article-share-btn article-share-copy" title="Salin Link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                </button>
              </div>
            </div>
          </div>

          <!-- Sidebar -->
          <aside class="article-sidebar">
            @if($relatedNews->count() > 0)
            <div class="article-sidebar-section reveal-right">
              <h3 class="article-sidebar-title">Berita Lainnya</h3>
              <div class="article-related-list">
                @foreach($relatedNews as $related)
                <a href="{{ route('berita.show', $related->slug) }}" class="article-related-card">
                  <div class="article-related-image">
                    <img src="{{ $related->image ? asset('storage/' . $related->image) : asset('image/placeholder.jpg') }}" alt="{{ $related->title }}" loading="lazy" />
                  </div>
                  <div class="article-related-info">
                    <h4 class="article-related-title">{{ Str::limit($related->title, 60) }}</h4>
                    <time class="article-related-date">{{ $related->published_at->translatedFormat('d M Y') }}</time>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
            @endif

            <div class="article-sidebar-section reveal-right delay-2">
              <h3 class="article-sidebar-title">Lihat Semua Berita</h3>
              <a href="{{ route('berita.index') }}" class="article-sidebar-cta">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                Arsip Berita
              </a>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </article>
@endsection

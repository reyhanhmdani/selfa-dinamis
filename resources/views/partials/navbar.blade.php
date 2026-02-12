<nav class="navbar" id="navbar">
  <div class="container navbar-inner">
    <a href="{{ route('home') }}" class="nav-logo">Sayf El Falah</a>
    
    <div class="nav-links">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
      <a href="{{ route('home') }}#about" class="nav-link">About Us</a>
      <div class="dropdown">
        <button class="dropdown-btn" id="dropdown-btn">
          Program Selfa 
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="dropdown-menu" id="dropdown-menu">
          <a href="{{ route('program.kbtk') }}">KB & TK Selfa</a>
          <a href="{{ route('program.sd') }}">SD Alam Selfa</a>
          <a href="{{ route('program.ponpes') }}">Pondok Pesantren</a>
        </div>
      </div>
    </div>

    <button class="mobile-menu-btn" id="mobile-menu-btn">
      <span></span><span></span><span></span>
    </button>
  </div>

  <div class="mobile-menu" id="mobile-menu">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('home') }}#about">About Us</a>
    <button class="dropdown-btn" id="mobile-dropdown-btn" style="width:100%;text-align:left;padding:0.75rem 0;color:var(--gray-700);font-weight:500;border-bottom:1px solid var(--gray-100);font-size:1rem;">
      Program Selfa 
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>
    <div class="mobile-dropdown-content" id="mobile-dropdown-content">
      <a href="{{ route('program.kbtk') }}">KB & TK Selfa</a>
      <a href="{{ route('program.sd') }}">SD Alam Selfa</a>
      <a href="{{ route('program.ponpes') }}">Pondok Pesantren</a>
    </div>
  </div>
</nav>

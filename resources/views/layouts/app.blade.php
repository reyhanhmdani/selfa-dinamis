<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sekolah Sayf El Falah - Membentuk Generasi Unggul, Berkarakter, dan Berprestasi. Pendidikan terpadu yang mengintegrasikan ilmu pengetahuan dan nilai-nilai keislaman.">
    <title>@yield('title', 'Sekolah Sayf El Falah')</title>
    <link rel="icon" href="{{ asset('image/icon-sd-selfa.png') }}" type="image/png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- CSS / Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-body text-gray-700 bg-white">

    <!-- Page Loader -->
    <div class="page-loader" id="page-loader">
        <div class="loader-particles">
            <span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
        <div class="loader-center">
            <div class="loader-ring">
                <svg viewBox="0 0 100 100">
                    <circle class="loader-ring-bg" cx="50" cy="50" r="42" fill="none" stroke-width="3" />
                    <circle class="loader-ring-progress" cx="50" cy="50" r="42" fill="none" stroke-width="3" />
                </svg>
                <div class="loader-icon">
                    <img src="{{ asset('image/icon-sd-selfa.png') }}" alt="Logo" />
                </div>
            </div>
            <div class="loader-text">
                <span class="loader-letter" style="--i:0">S</span><span class="loader-letter" style="--i:1">a</span><span class="loader-letter" style="--i:2">y</span><span class="loader-letter" style="--i:3">f</span><span class="loader-letter loader-space" style="--i:4">&nbsp;</span><span class="loader-letter" style="--i:5">E</span><span class="loader-letter" style="--i:6">l</span><span class="loader-letter loader-space" style="--i:7">&nbsp;</span><span class="loader-letter" style="--i:8">F</span><span class="loader-letter" style="--i:9">a</span><span class="loader-letter" style="--i:10">l</span><span class="loader-letter" style="--i:11">a</span><span class="loader-letter" style="--i:12">h</span>
            </div>
            <p class="loader-tagline">Membentuk Generasi Unggul</p>
        </div>
    </div>

    <!-- Quick Page Transition -->
    <div class="page-transition" id="page-transition"></div>

    <!-- Scroll Progress -->
    <div class="scroll-progress"></div>



    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <button class="lightbox-close">&times;</button>
        <button class="lightbox-btn lightbox-prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
        <img class="lightbox-image" src="" alt="Gallery Image" />
        <button class="lightbox-btn lightbox-next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
        <div class="lightbox-thumbs"></div>
    </div>

</body>
</html>

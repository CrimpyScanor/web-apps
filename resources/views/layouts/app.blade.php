<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#21152f">
    <title>@yield('title', 'Reze | Purple Bloom')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="{{ route('home') }}" aria-label="Ir al inicio">
                <span class="brand-mark">✦</span>
                <span>REZE<span class="brand-light">.BLOOM</span></span>
            </a>

            <nav class="main-nav" aria-label="Menú principal">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">Home</a>
                <a href="{{ route('gallery') }}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" aria-current="{{ request()->routeIs('gallery') ? 'page' : 'false' }}">Gallery</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" aria-current="{{ request()->routeIs('about') ? 'page' : 'false' }}">About me</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" aria-current="{{ request()->routeIs('contact') ? 'page' : 'false' }}">Contact</a>
            </nav>

            <span class="header-note">A little purple universe <span>♡</span></span>
        </header>

        <main class="main-content">
            @yield('content')
        </main>

        <footer class="site-footer">
            <div>
                <p class="footer-name">Bernardo Isaac Valenzuela Piña</p>
                <p class="footer-meta">Ingeniería en Desarrollo de Software · Actividad 11 · Laravel &amp; Blade</p>
            </div>
            <p class="footer-signature">Made with <span>♥</span> and a little purple magic.</p>
        </footer>
    </div>
</body>
</html>

@extends('layouts.app')

@section('title', 'Home | Reze Bloom')

@section('content')
<section class="hero-panel">
    <div class="hero-copy">
        <span class="eyebrow"><span class="eyebrow-line"></span> WELCOME TO MY LITTLE WORLD</span>
        <h1>Somewhere between<br><em>dreams</em> and reality.</h1>
        <p class="hero-description">Un pequeño espacio inspirado en mi anime facorito "Chainsaw Man", construido con Laravel, Blade y mucho cariño por los detalles.</p>
        <div class="hero-actions">
            <a class="button button-primary" href="{{ route('gallery') }}">Explore gallery <span>↗</span></a>
            <a class="text-link" href="{{ route('about') }}">Get to know me <span>→</span></a>
        </div>
        <div class="hero-caption"><span class="caption-dot"></span> ACTIVITY 11 · BLADE TEMPLATING</div>
    </div>
    <div class="hero-art-wrap">
        <div class="hero-glow"></div>
        <div class="hero-image-frame">
            <img src="{{ asset('images/Reze5.jpeg') }}" alt="Imagen de Reze en tonos azules">
        </div>
        <div class="image-sticker">sweet<br><strong>danger</strong> ✦</div>
        <span class="art-orbit orbit-one">✧</span>
        <span class="art-orbit orbit-two">✦</span>
    </div>
    <div class="hero-index">01 <span>/ 04</span></div>
</section>

<section class="welcome-strip">
    <div><span class="strip-label">THE IDEA</span><h2>Simple pages, one shared layout.</h2></div>
    <p>Explora las secciones desde el menú superior. La opción activa cambia de estilo según la página que estés visitando.</p>
</section>
@endsection

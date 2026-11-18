@extends('layouts.app')

@section('title', 'Gallery | Reze Bloom')

@section('content')
<section class="page-heading">
    <span class="eyebrow"><span class="eyebrow-line"></span> A FEW FRAMES TO REMEMBER</span>
    <h1>The <em>gallery.</em></h1>
    <p>Una pequeña colección visual inspirada en Reze. Cada imagen vive dentro de los archivos locales del proyecto.</p>
</section>

<section class="gallery-grid">
    <article class="gallery-card gallery-card-tall">
        <div class="gallery-image"><img src="{{ asset('images/Reze9.jpeg') }}" alt="Reze en una escena de tonos azules"></div>
        <div class="gallery-card-info"><div><span class="card-kicker">01 · THE MOMENT</span><h2>Blue hour</h2></div><span class="card-star">✦</span></div>
    </article>
    <article class="gallery-card gallery-card-offset">
        <div class="gallery-image"><img src="{{ asset('images/Reze6.jpeg') }}" alt="Detalle del retrato de Reze"></div>
        <div class="gallery-card-info"><div><span class="card-kicker">02 · THE LOOK</span><h2>Quiet eyes</h2></div><span class="card-star">✧</span></div>
    </article>
    <article class="gallery-card gallery-card-tall">
        <div class="gallery-image"><img src="{{ asset('images/Reze2.jpeg') }}" alt="Reze con un tratamiento de color más intenso"></div>
        <div class="gallery-card-info"><div><span class="card-kicker">03 · THE FEELING</span><h2>Afterglow</h2></div><span class="card-star">✦</span></div>
    </article>
</section>
<p class="gallery-note">Las imágenes de esta actividad son recursos locales guardados en <code>public/images</code>.</p>
@endsection

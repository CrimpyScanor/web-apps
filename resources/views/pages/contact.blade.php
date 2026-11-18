@extends('layouts.app')

@section('title', 'Contact | Reze Bloom')

@section('content')
<section class="page-heading">
    <span class="eyebrow"><span class="eyebrow-line"></span> LET'S KEEP IN TOUCH</span>
    <h1>Say <em>hello.</em></h1>
    <p>Esta sección representa el espacio de contacto del sitio. Por ahora es una tarjeta informativa de demostración.</p>
</section>

<section class="contact-panel">
    <div class="contact-orb">✉</div>
    <div class="contact-copy">
        <span class="card-kicker">THANKS FOR STOPPING BY</span>
        <h2>Every good idea<br>starts with a <em>hello.</em></h2>
        <p>¿Tienes una idea, un proyecto o simplemente quieres conversar sobre tecnología? Será genial conectar.</p>
        <a class="button button-primary" href="{{ route('home') }}">Back to home <span>↗</span></a>
    </div>
    <div class="contact-decoration">♡</div>
</section>
@endsection

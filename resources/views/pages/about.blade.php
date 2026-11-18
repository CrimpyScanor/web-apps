```blade
@extends('layouts.app')

@section('title', 'About me | Reze Bloom')

@section('content')
<section class="page-heading">
    <span class="eyebrow">
        <span class="eyebrow-line"></span>
        THE PERSON BEHIND THE CODE
    </span>

    <h1>A little about <em>me.</em></h1>
    <p>Un vistazo al estudiante que está construyendo este pequeño proyecto.</p>
</section>

<section class="about-layout">

    <div class="about-symbol">
        <img src="{{ asset('images/Yop.jpeg') }}"
             alt="Fotografía mia xd"
             class="about-photo">

        <small>STUDENT · CREATOR · DEVELOPER</small>
    </div>

    <div class="about-copy">
        <span class="card-kicker">HELLO, I'M BERNARDO</span>

        <h2>Learning to turn<br><em>ideas into things.</em></h2>

        <p>
            Mi nombre es Bernardo Isaac Valenzuela Piña y estudio
            Ingeniería en Desarrollo de Software. Me interesa la
            programación, el desarrollo de aplicaciones y crear
            experiencias digitales que tengan personalidad.
        </p>

        <p>
            Esta actividad es una práctica de Laravel y Blade:
            varias vistas independientes que comparten una misma
            plantilla y un menú de navegación.
        </p>

        <div class="skill-list">
            <span>Laravel</span>
            <span>PHP</span>
            <span>HTML &amp; CSS</span>
            <span>Blade</span>
        </div>
    </div>

</section>
@endsection
```
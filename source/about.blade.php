@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Il Gruppo</h1>

    <img src="/assets/img/about.svg"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Gruppo di discussione su temi legati al mondo dell'informatica, programmazione, gestione, buone pratiche e framework Agili. Ci troviamo mediamente una volta al mese, potete scoprire i nostri appuntamenti sul link in alto "incontri". Se volete contattrci fatelo tramite il gruppo meetup o all'email rovigo at grusp.org.</p>

    <p class="mb-6">Siamo parte del GrUSP quindi ci rifacciamo a tutti i principi che potete trovare qui <a href="https://www.grusp.org/it/about.html">Grusp</a></p>
    
    <p class="mb-6">Potete contattarci via email a rovigo@grusp.org, via meetup o sul canale #pug-rovigo dello slack del Grusp</p>
    
@endsection

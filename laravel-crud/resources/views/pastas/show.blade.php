@extends('layouts.app')

@section('title','Le nostre paste - Molisana')

@section('content')

<main>
  <section>
    <div class="container">
      <p>pastas.show</p>
      <h1 class="fs-2">Pagina di dettaglio della pasta: {{ $pasta->title }}</h1>
    </div>
    <div class="container">
      <ul>
        <li>Tyipo: {{ $pasta->type }}</li>
        <li>Peso: {{ $pasta->weight }}</li>
        <li>Cottura: {{ $pasta->cooking_time }}</li>
      </ul>
    </div>
    <div class="container">
      <div>
        {!! $pasta->description !!}
      </div>
    </div>
  </section>
</main>

@endsection
@extends('layouts.app')

@section('title','Le nostre paste - Molisana')

@section('content')

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <p>pastas.show</p>
      <h1 class="fs-2">Titolo:{{ $pasta->title }}</h1>
        </div>
        <div class="col-auto ms-auto">
          <div class="d-flex gap-2">
            <a href="{{ route('pastas.edit',$pasta) }}">Edit</a>
            <form action="{{ route('pastas.destroy',$pasta) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-link link-danger">Trash</button>

              </form>
          </div>
          
        </div>
      </div>
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
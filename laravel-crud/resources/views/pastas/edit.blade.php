@extends('layouts.app')

@section('title','Le nostre paste - Molisana')

@section('content')

<main>
  <section>
    <div class="container">
      <p>pastas.edit</p>
      <h2 class="fs-2">Modifca la pasta: {{ $pasta->title }}</h2>
    </div>
    <div class="container">
      <form action="{{ route('pastas.update',$pasta) }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')
        {{-- <input type="hidden" name="_method" value="PUT"> --}}

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titolo della pasta" value="{{ $pasta->title }}">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Url Image</label>
          <input type="text" name="image" class="form-control" id="image" placeholder="http://..." value="{{ $pasta->image }}">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="lunga" value="{{ $pasta->type }}">
        </div>

        <div class="mb-3">
          <label for="cooking_time" class="form-label">Tempo di cottura</label>
          <input type="text" name="cooking_time" class="form-control" id="cooking_time" placeholder="10 min" value="{{ $pasta->cooking_time }}">
        </div>

        <div class="mb-3">
          <label for="weight" class="form-label">Peso</label>
          <input type="text" name="weight" class="form-control" id="weight" placeholder="500g" value="{{ $pasta->weight }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione della pasta">{{ $pasta->description }}</textarea>
        </div>

        <button class="btn btn-primary">Salva</button>
      </form>
    </div>
  </section>
</main>

@endsection
@extends('layouts.app')

@section('title','Le nostre paste - Molisana')

@section('content')

<main>
  <section>
    <div class="container">
      <p>pastas.create</p>
      <h2 class="fs-2">Crea una nuova pasta</h2>
    </div>
    <div class="container">
      <form action="{{ route('pastas.store') }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="email" name="title" class="form-control" id="title" placeholder="Titolo della pasta">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Url Image</label>
          <input type="email" name="image" class="form-control" id="image" placeholder="http://...">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="email" name="type" class="form-control" id="type" placeholder="lunga">
        </div>

        <div class="mb-3">
          <label for="cooking_time" class="form-label">Tempo di cottura</label>
          <input type="email" name="cooking_time" class="form-control" id="cooking_time" placeholder="10 min">
        </div>

        <div class="mb-3">
          <label for="weigth" class="form-label">Peso</label>
          <input type="email" name="weigth" class="form-control" id="weigth" placeholder="500g">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione della pasta"></textarea>
        </div>

        <button class="btn btn-primary">Crea</button>
      </form>
    </div>
  </section>
</main>

@endsection
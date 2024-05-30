@extends('layouts.app')

@section('title','Le nostre paste - Molisana')

@section('content')

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <p>vista pastas.index</p>
            <h1 class="fs-2">Le nostre Paste</h1>
        </div>
        <div class="col-auto ms-auto">
          <a href="{{ route('pastas.create') }}" class="btn btn-primary">Nuova Pasta</a>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Immagine</th>
      <th>Titolo</th>
      <th>Tipo</th>
      <th>Cottura</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pastas as $pasta)
        <tr>
          <td>{{ $pasta->id }}</td>
          <td>
            <img src="{{ $pasta->image }}" height="144" width="144" alt="">
          </td>
          <td>
            <a href="{{ route('pastas.show', $pasta ) }}">
              {{ $pasta->title }}
            </a>
          </td>
          <td>{{ $pasta->type}}</td>
          <td>{{ $pasta->cooking_time }}</td>
          <td>
            <div class="d-flex gap-2">
              <a href="{{ route('pastas.edit',$pasta) }}">Edit</a>
              <form action="{{ route('pastas.destroy',$pasta) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-link link-danger">Trash</button>

              </form>
            </div>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </section>
</main>
@endsection
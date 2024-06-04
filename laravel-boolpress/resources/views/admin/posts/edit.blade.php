@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>Nuovo Post</h1>
    </div>
    <div class="container">
      <form action="{{ route('admin.posts.update',$post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo articolo" value="{{ old('title',$post->title) }}">
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug articolo" value="{{ old('slug',$post->slug) }}">
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Contenuto</label>
          <textarea class="form-control" name="content" placeholder="Contenuto del post" id="content" rows="10">{{ old('content',$post->content) }}</textarea>
        </div>

        <button class="btn btn-primary">Salva</button>
      </form>

      @if ($errors->any())
          <div class="alert alert-danger mt-3">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </section>
@endsection
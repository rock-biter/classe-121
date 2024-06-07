@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>Nuovo Post</h1>
    </div>
    <div class="container">
      <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Titolo articolo" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
          <label for="category_id" class="form-label">Titolo</label>
          <select class="form-control" name="category_id" id="category_id">
            <option value="">-- Seleziona Categoria --</option>
            @foreach($categories as $category) 
              <option @selected( $category->id == old('category_id') ) value="{{ $category->id }}"> {{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group mb-3">
          <h2>Seleziona i tags</h2>

          {{-- @dump(old('tags',[])) --}}
          <div class="d-flex gap-2">
            @foreach ($tags as $tag)

              <div class="form-check">
                <input @checked( in_array($tag->id, old('tags',[])) ) name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag-{{$tag->id}}">
                <label class="form-check-label" for="tag-{{$tag->id}}">
                  {{ $tag->name }}
                </label>
              </div>
                
            @endforeach
          </div>
          
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Contenuto</label>
          <textarea class="form-control" name="content" placeholder="Contenuto del post" id="content" rows="10">{{ old('content') }}</textarea>
        </div>

        <button class="btn btn-primary">Crea</button>
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
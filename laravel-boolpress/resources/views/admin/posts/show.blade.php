@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->slug }}</p>
      <p>Utente: {{ $post->user->name }}</p>
      <p>
        Categoria:
        {{ $post->category ? $post->category->name : 'Nessuna categoria' }}
        {{-- {{ optional($post->category)->name  }} --}}
        {{-- @dump($post->category) --}}
      </p>
      {{-- @dump($post->tags()) --}}
      <p>Tags:</p>
      <ul class="d-flex gap-2 list-unstyled">
        @foreach($post->tags as $tag) 
          <li>{{ $tag->name }}</li>
        @endforeach
      </ul>

      @if($post->user_id === Auth::id())
        <form class="delete-form" action="{{ route('admin.posts.destroy',$post) }}" method="POST">
        
          @csrf
          @method('DELETE')

          <button class="btn btn-link link-danger">Elimina</button>
        
        </form>
      @endif
      {{-- <p>
        @dump($post->category() )
      </p> --}}
    </div>
    <div class="container">
      {!! $post->content !!}
    </div>

    @if($post->category)
    <div class="container">
      <h2>Related post</h2>

      @foreach($post->category->posts as $related_post )
        <div>
          <h3><a href="{{ route('admin.posts.show',$related_post) }}">
            {{ $related_post->title }}  
          </a></h3>
        </div>
      @endforeach
    </div>
    @endif
  </section>
@endsection
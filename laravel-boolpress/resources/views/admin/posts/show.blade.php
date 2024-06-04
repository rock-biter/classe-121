@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->slug }}</p>
    </div>
    <div class="container">
      {!! $post->content !!}
    </div>
  </section>
@endsection
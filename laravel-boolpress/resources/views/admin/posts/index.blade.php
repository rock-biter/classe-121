@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <h1>Bolg</h1>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td><a href="{{ route('admin.posts.show',$post) }}">
                {{ $post->title   }}
              </a></td>
              <td>{{ $post->slug }}</td>
              <td>
                {{-- edit e delete --}}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
        
      </div>
    </div>
  </section>
@endsection
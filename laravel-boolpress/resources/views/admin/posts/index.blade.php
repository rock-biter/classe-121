@extends('layouts.app')

@section('content')

  <section>
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1>Articoli</h1>
        @auth

          <a href="{{ route('admin.posts.create') }}" title="Vai alla pagina di creazione di un nuovo post">Nuovo</a>
        @endif
      </div>
    </div>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th colspan="3">Slug</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>
                @auth 
                  <a href="{{ route('admin.posts.show',$post) }}">
                  {{ $post->title }}
                  </a>
                @else
                  <a href="{{ route('posts.show',$post) }}">
                  {{ $post->title }}
                  </a>
                @endif
              </td>
              <td>{{ $post->slug }}</td>
              <td>
                @auth
                  <a href="{{ route('admin.posts.edit',$post) }}">modifica</a>
                @endif
                {{-- edit e delete --}}
              </td>
              <td>
                @auth

                  <form action="{{ route('admin.posts.destroy',$post) }}" method="POST">
                  
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-link link-danger">Elimina</button>
                  
                  </form>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
        
      </div>
    </div>
  </section>
@endsection
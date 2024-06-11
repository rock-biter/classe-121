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
            <th></th>
            <th>ID</th>
            <th>Title</th>
            <th>User</th>
            {{-- <th>Category ID</th> --}}
            <th>Category</th>
            <th colspan="3">Slug</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td class="text-warning">
                <form action="{{ route('admin.posts.toggleFavorite',$post) }}" method="POST">
                  @csrf

                  <button class="border-0 bg-transparent">
                    @if( Auth::user()->isfavorite($post) )
                      <i class="fa-solid fa-star"></i>
                    @else 
                      <i class="fa-regular fa-star"></i>
                    @endif
                  </button>
                </form>
                
              </td>
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
              <td>
                {{ $post->user->name }}
              </td>
              {{-- <td>
                {{ $post->category_id }}
              </td> --}}
              <td>
                {{-- categoria --}}
                {{ $post->category ? $post->category->name : '' }}
                {{-- @dump( $post->category() ) --}}
              </td>
              <td>{{ $post->slug }}</td>
              <td>
                @auth
                  @if($post->user_id === Auth::id())
                    <a href="{{ route('admin.posts.edit',$post) }}">modifica</a>
                  @endif
                @endif
                {{-- edit e delete --}}
              </td>
              <td>
                @auth
                  @if($post->user_id === Auth::id())
                    <form class="delete-form" action="{{ route('admin.posts.destroy',$post) }}" method="POST">
                    
                      @csrf
                      @method('DELETE')

                      <button class="btn btn-link link-danger">Elimina</button>
                    
                    </form>
                  @endif
                  
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
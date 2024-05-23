@extends('layouts.app')

@section('title','Laravel')

@section('content')

<main class="bg-light">
        
    <div class="container">
        <div class="row">
            @foreach ($departments as $department)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $department->name }}</h3>
                            <p>{{ $department->email }}</p>
                            <p>{{ $department->website }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        
    </main>

@endsection
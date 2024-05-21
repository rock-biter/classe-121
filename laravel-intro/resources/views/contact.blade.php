@extends('layouts.app')

{{-- se dobbiamo passare solo una stringa questo è più comodo --}}
@section('title','Contattaci')

{{-- @section('title')
Contatti
@endsection --}}

@section('content')
  <ul>
    @foreach ($numeri as $num)
     
      @if($loop->first)
        <li>{{ $num }}: Ciao Mamma</li>
      @elseif ($loop->last)
        <li>{{ $num }}: Ho finito</li>
      @else 
        <li>{{ $num }}</li>
      @endif
        
    @endforeach

  </ul>

  <h1>Contatti</h1>
  
  <form action="">
    <input type="text" placeholder="Il tuo nome">
  </form>
@endsection
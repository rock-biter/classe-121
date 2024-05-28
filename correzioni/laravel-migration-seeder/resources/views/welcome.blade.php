@extends('layouts.app')

@section('title','Laravel')

@section('content')

<main class="bg-light">
        <div class="container">
            <h2 class="fs-3">Treni in partenza oggi</h2>
            
        </div>
        <div class="container">
{{-- elenco dei treni --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>Codice</th>
                        <th>Partenza</th>
                        <th>Arrivo</th>
                        <th>Orario partenza</th>
                        <th>Orario arrivo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            
        </div>
    </main>

@endsection
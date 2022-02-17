@extends('layout.base')

@section('content')
        PROVA HOME
    <div class="stampa">
        @foreach ($movies as $movie)
            <h1>{{ $movie->id }}</h1>
        @endforeach                             
    </div>
        
@endsection
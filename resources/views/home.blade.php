@extends('layout.base')

@section('content')
        PROVA HOME
    <div class="stampa">
        @foreach ($movies as $movie)
            <h1>{{ $movie->title }}</h1>
            <h2>{{ $movie->vote }}</h2>
        @endforeach                             
    </div>
        
@endsection
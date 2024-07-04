@extends('layouts.app')

@section('content')
    <div class="m-5">
        <h2>{{ $comic['name'] }}</h2>
        <p>Prezzo: {{ $comic['price'] }}$</p>
        <p>Anno di rilascio: {{ $comic['release_year'] }}</p>
        <p>Autore: {{ $comic['artist'] }}</p>
        <p>{{ $comic['description'] }}</p>
    </div>
@endsection

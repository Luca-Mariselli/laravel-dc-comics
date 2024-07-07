@extends('layouts.app')

@section('content')
    <h1 class="ms-5 mt-5 mb-3">Lista Fumetti:</h1>
    <a class="m-5 border p-2" href="/comics/create">Inserisci nuovo fumetto</a>
    <div class="m-5 d-flex flex-wrap">
        @foreach ($catalogo as $comic)
            <div class="card">
                <p><a href="/comics/{{ $comic->id }}">{{ $comic['name'] }}</a></p>
            </div>
        @endforeach
    </div>
@endsection

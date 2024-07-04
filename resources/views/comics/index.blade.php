@extends('layouts.app')

@section('content')
    <a href="/comics/create">Inserisci nuovo fumetto</a>
    <h1 class="m-5">Lista Fumetti:</h1>
    <div class="m-5 d-flex flex-wrap">
        @foreach ($catalogo as $key => $comic)
            <div class="card">
                <p><a href="/comics/{{ $key }}">{{ $comic['name'] }}</a></p>
            </div>
        @endforeach
    </div>
@endsection

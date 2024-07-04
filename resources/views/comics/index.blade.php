@extends('layouts.app')

@section('content')
    <h1 class="m-5">Lista Fumetti:</h1>
    <div class="m-5">
        @foreach ($catalogo as $key => $comic)
            <li class="mb-3"><a class="" href="/comics/{{ $key }}">{{ $comic['name'] }}</a></li>
        @endforeach
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <h1 class="m-5">Aggiungi un fumetto:</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="w-50 m-5">
            <label for="formGroupExampleInput" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titolo Fumetto" name="name">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Prezzo in $" name="price">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Anno</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Anno di rilascio"
                name="release_year">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Autore</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Autore" name="artist">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Descrizione"
                name="description">
        </div>

        <input class="mx-5 rounded-pill p-2" type="submit" value="Submit">
    </form>
@endsection

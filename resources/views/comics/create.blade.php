@extends('layouts.app')

@section('content')
    <div class="w-50 m-5">
        <label for="formGroupExampleInput" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titolo Fumetto">
    </div>
    <div class="w-50 m-5">
        <label for="formGroupExampleInput2" class="form-label">Anno</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Anno di rilascio">
    </div>
    <div class="w-50 m-5">
        <label for="formGroupExampleInput2" class="form-label">Autore</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Autore">
    </div>
    <div class="w-50 m-5">
        <label for="formGroupExampleInput2" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Descrizione">
    </div>

    <button class="m-5 rounded-pill p-2">Submit</button>
@endsection

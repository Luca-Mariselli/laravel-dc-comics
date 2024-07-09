<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();
        $data = [
            'catalogo' => $comicsList
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->all();

        $newComic = new Comic();
        $newComic->name = $data['name'];
        $newComic->price = $data['price'];
        $newComic->release_year = $data['release_year'];
        $newComic->artist = $data['artist'];
        $newComic->description = $data['description'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fumetto = Comic::find($id);
        $data = [
            "comic" => $fumetto
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $fumetto) 
    {
        $data = [
            "comic" => $fumetto
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

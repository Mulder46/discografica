<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();

        return view('artists.index', compact('artists')); //mando a una vista artist para ver todos los artistas
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function select() //vamos a elegir los datos de que artista quiere ver
    {
        $artists=Artist::all();
        return view('artists.select',compact(['artists']));
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $artists=Artist::all();

        return view('artists.edit',compact(['artists']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $artist=Artist::findOrFail($request->id); //busco el id del artísta para editarlo
        $artist->name = $request->name;
        $artist->artistName = $request->artistName;
        $artist->save();
        return view('artists.show',compact('artist'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

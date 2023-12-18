<?php

namespace App\Http\Controllers\API;

use App\Models\Artist;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;
use Illuminate\Http\Request;


class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Artist::all();
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
    public function store(ArtistRequest $request)
    {
        $validated = $request->validated();

        $artist = Artist::create($validated);

        return $artist;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $artist_id)
    {
        return Artist::findOrFail($artist_id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

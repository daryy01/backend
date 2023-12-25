<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistsExhibitionRequest;
use App\Models\ArtistsExhibition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistsExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArtistsExhibition::all();
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
    public function store(ArtistsExhibitionRequest $request)
    {
        $validated = $request->validated();

        $validated['image'] = $request->file('image')->storePublicly('exhibition', 'public');

        $event = ArtistsExhibition::create($validated);

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function image(ArtistsExhibitionRequest $request)
    {
        $event = ArtistsExhibition::findOrFail($request->artist()->artist_id);

        if (!is_null($event->image)) {
            Storage::disk('public')->delete($event->image);
        }

        $event->image = $request->file('image')->storePublicly('images', 'public');

        $event->save();

        return $event;
    }

}

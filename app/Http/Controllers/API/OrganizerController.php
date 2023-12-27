<?php

namespace App\Http\Controllers\API;

use App\Models\Organizer;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizerRequest;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Organizer::all();
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
    public function store(OrganizerRequest $request)
    {
        $validated = $request->validated();

        $organizer = Organizer::create($validated);

        return $organizer;
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
    public function update(OrganizerRequest $request, string $id)
    {
        $validated = $request->validated();
        
        $organizer = Organizer::findOrFail($id);

        $organizer->update($validated);

        return $organizer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizer = Organizer::findOrFail($id);
 
        $organizer->delete();


        return $organizer;
    }
}

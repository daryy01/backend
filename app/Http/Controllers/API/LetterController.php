<?php

namespace App\Http\Controllers\Api;
use App\Models\Letter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LetterRequest;



class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Letter::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LetterRequest $request)
    {
         // Retrieve the validated input data...
         $validated = $request->validated();

         $letter = Letter::create($validated);
 
         return $letter;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Letter::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $letter = Letter::findOrFail($id);
 
        $letter->delete();


        return $letter;
    }
}

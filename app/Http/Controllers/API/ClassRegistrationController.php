<?php

namespace App\Http\Controllers\API;

use App\Models\ClassRegistration;
use App\Http\Requests\ClassRegistrationRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ClassRegistration::all();
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
    public function store(ClassRegistrationRequest $request)
    {
        $validated = $request->validated();

        $registration = ClassRegistration::create($validated);

        return $registration;
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
}

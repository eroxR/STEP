<?php

namespace App\Http\Controllers;

use App\Models\pension;
use App\Http\Requests\StorepensionRequest;
use App\Http\Requests\UpdatepensionRequest;

class PensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepensionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepensionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function show(pension $pension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function edit(pension $pension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepensionRequest  $request
     * @param  \App\Models\pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepensionRequest $request, pension $pension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function destroy(pension $pension)
    {
        //
    }
}

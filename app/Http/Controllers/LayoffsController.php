<?php

namespace App\Http\Controllers;

use App\Models\layoffs;
use App\Http\Requests\StorelayoffsRequest;
use App\Http\Requests\UpdatelayoffsRequest;

class LayoffsController extends Controller
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
     * @param  \App\Http\Requests\StorelayoffsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelayoffsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layoffs  $layoffs
     * @return \Illuminate\Http\Response
     */
    public function show(layoffs $layoffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layoffs  $layoffs
     * @return \Illuminate\Http\Response
     */
    public function edit(layoffs $layoffs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelayoffsRequest  $request
     * @param  \App\Models\layoffs  $layoffs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelayoffsRequest $request, layoffs $layoffs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layoffs  $layoffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(layoffs $layoffs)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\economicActivity;
use App\Http\Requests\StoreeconomicActivityRequest;
use App\Http\Requests\UpdateeconomicActivityRequest;

class EconomicActivityController extends Controller
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
     * @param  \App\Http\Requests\StoreeconomicActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreeconomicActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\economicActivity  $economicActivity
     * @return \Illuminate\Http\Response
     */
    public function show(economicActivity $economicActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\economicActivity  $economicActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(economicActivity $economicActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateeconomicActivityRequest  $request
     * @param  \App\Models\economicActivity  $economicActivity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateeconomicActivityRequest $request, economicActivity $economicActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\economicActivity  $economicActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(economicActivity $economicActivity)
    {
        //
    }
}

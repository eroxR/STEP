<?php

namespace App\Http\Controllers;

use App\Models\historical_First_Aid;
use App\Http\Requests\Storehistorical_First_AidRequest;
use App\Http\Requests\Updatehistorical_First_AidRequest;

class HistoricalFirstAidController extends Controller
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
     * @param  \App\Http\Requests\Storehistorical_First_AidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storehistorical_First_AidRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historical_First_Aid  $historical_First_Aid
     * @return \Illuminate\Http\Response
     */
    public function show(historical_First_Aid $historical_First_Aid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historical_First_Aid  $historical_First_Aid
     * @return \Illuminate\Http\Response
     */
    public function edit(historical_First_Aid $historical_First_Aid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatehistorical_First_AidRequest  $request
     * @param  \App\Models\historical_First_Aid  $historical_First_Aid
     * @return \Illuminate\Http\Response
     */
    public function update(Updatehistorical_First_AidRequest $request, historical_First_Aid $historical_First_Aid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historical_First_Aid  $historical_First_Aid
     * @return \Illuminate\Http\Response
     */
    public function destroy(historical_First_Aid $historical_First_Aid)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\historical_layoffs;
use App\Http\Requests\Storehistorical_layoffsRequest;
use App\Http\Requests\Updatehistorical_layoffsRequest;

class HistoricalLayoffsController extends Controller
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
     * @param  \App\Http\Requests\Storehistorical_layoffsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storehistorical_layoffsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historical_layoffs  $historical_layoffs
     * @return \Illuminate\Http\Response
     */
    public function show(historical_layoffs $historical_layoffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historical_layoffs  $historical_layoffs
     * @return \Illuminate\Http\Response
     */
    public function edit(historical_layoffs $historical_layoffs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatehistorical_layoffsRequest  $request
     * @param  \App\Models\historical_layoffs  $historical_layoffs
     * @return \Illuminate\Http\Response
     */
    public function update(Updatehistorical_layoffsRequest $request, historical_layoffs $historical_layoffs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historical_layoffs  $historical_layoffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(historical_layoffs $historical_layoffs)
    {
        //
    }
}

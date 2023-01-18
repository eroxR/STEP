<?php

namespace App\Http\Controllers;

use App\Models\historicalLayoffs;
use App\Http\Requests\StorehistoricalLayoffsRequest;
use App\Http\Requests\UpdatehistoricalLayoffsRequest;

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
     * @param  \App\Http\Requests\StorehistoricalLayoffsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoricalLayoffsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historicalLayoffs  $historicalLayoffs
     * @return \Illuminate\Http\Response
     */
    public function show(historicalLayoffs $historicalLayoffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historicalLayoffs  $historicalLayoffs
     * @return \Illuminate\Http\Response
     */
    public function edit(historicalLayoffs $historicalLayoffs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoricalLayoffsRequest  $request
     * @param  \App\Models\historicalLayoffs  $historicalLayoffs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoricalLayoffsRequest $request, historicalLayoffs $historicalLayoffs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historicalLayoffs  $historicalLayoffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(historicalLayoffs $historicalLayoffs)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\historicalPension;
use App\Http\Requests\StorehistoricalPensionRequest;
use App\Http\Requests\UpdatehistoricalPensionRequest;

class HistoricalPensionController extends Controller
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
     * @param  \App\Http\Requests\StorehistoricalPensionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoricalPensionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\historicalPension  $historicalPension
     * @return \Illuminate\Http\Response
     */
    public function show(historicalPension $historicalPension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historicalPension  $historicalPension
     * @return \Illuminate\Http\Response
     */
    public function edit(historicalPension $historicalPension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoricalPensionRequest  $request
     * @param  \App\Models\historicalPension  $historicalPension
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoricalPensionRequest $request, historicalPension $historicalPension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historicalPension  $historicalPension
     * @return \Illuminate\Http\Response
     */
    public function destroy(historicalPension $historicalPension)
    {
        //
    }
}

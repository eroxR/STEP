<?php

namespace App\Http\Controllers;

use App\Models\bonding;
use App\Http\Requests\StorebondingRequest;
use App\Http\Requests\UpdatebondingRequest;

class BondingController extends Controller
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
     * @param  \App\Http\Requests\StorebondingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebondingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bonding  $bonding
     * @return \Illuminate\Http\Response
     */
    public function show(bonding $bonding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bonding  $bonding
     * @return \Illuminate\Http\Response
     */
    public function edit(bonding $bonding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebondingRequest  $request
     * @param  \App\Models\bonding  $bonding
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebondingRequest $request, bonding $bonding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bonding  $bonding
     * @return \Illuminate\Http\Response
     */
    public function destroy(bonding $bonding)
    {
        //
    }
}

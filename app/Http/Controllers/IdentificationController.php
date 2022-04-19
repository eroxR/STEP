<?php

namespace App\Http\Controllers;

use App\Models\identification;
use App\Http\Requests\StoreidentificationRequest;
use App\Http\Requests\UpdateidentificationRequest;

class IdentificationController extends Controller
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
     * @param  \App\Http\Requests\StoreidentificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreidentificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\identification  $identification
     * @return \Illuminate\Http\Response
     */
    public function show(identification $identification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\identification  $identification
     * @return \Illuminate\Http\Response
     */
    public function edit(identification $identification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateidentificationRequest  $request
     * @param  \App\Models\identification  $identification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateidentificationRequest $request, identification $identification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\identification  $identification
     * @return \Illuminate\Http\Response
     */
    public function destroy(identification $identification)
    {
        //
    }
}

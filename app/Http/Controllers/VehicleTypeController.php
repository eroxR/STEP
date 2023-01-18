<?php

namespace App\Http\Controllers;

use App\Models\vehicleType;
use App\Http\Requests\StorevehicleTypeRequest;
use App\Http\Requests\UpdatevehicleTypeRequest;

class VehicleTypeController extends Controller
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
     * @param  \App\Http\Requests\StorevehicleTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevehicleTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicleType  $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function show(vehicleType $vehicleType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicleType  $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicleType $vehicleType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevehicleTypeRequest  $request
     * @param  \App\Models\vehicleType  $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevehicleTypeRequest $request, vehicleType $vehicleType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicleType  $vehicleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicleType $vehicleType)
    {
        //
    }
}

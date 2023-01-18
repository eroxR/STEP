<?php

namespace App\Http\Controllers;

use App\Models\vehicleClass;
use App\Http\Requests\StorevehicleClassRequest;
use App\Http\Requests\UpdatevehicleClassRequest;

class VehicleClassController extends Controller
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
     * @param  \App\Http\Requests\StorevehicleClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevehicleClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function show(vehicleClass $vehicleClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicleClass $vehicleClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevehicleClassRequest  $request
     * @param  \App\Models\vehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevehicleClassRequest $request, vehicleClass $vehicleClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicleClass  $vehicleClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicleClass $vehicleClass)
    {
        //
    }
}

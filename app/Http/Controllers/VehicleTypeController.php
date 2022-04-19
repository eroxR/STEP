<?php

namespace App\Http\Controllers;

use App\Models\vehicle_type;
use App\Http\Requests\Storevehicle_typeRequest;
use App\Http\Requests\Updatevehicle_typeRequest;

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
     * @param  \App\Http\Requests\Storevehicle_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storevehicle_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicle_type  $vehicle_type
     * @return \Illuminate\Http\Response
     */
    public function show(vehicle_type $vehicle_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicle_type  $vehicle_type
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicle_type $vehicle_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatevehicle_typeRequest  $request
     * @param  \App\Models\vehicle_type  $vehicle_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updatevehicle_typeRequest $request, vehicle_type $vehicle_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicle_type  $vehicle_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicle_type $vehicle_type)
    {
        //
    }
}

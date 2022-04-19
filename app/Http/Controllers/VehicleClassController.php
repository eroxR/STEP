<?php

namespace App\Http\Controllers;

use App\Models\vehicle_class;
use App\Http\Requests\Storevehicle_classRequest;
use App\Http\Requests\Updatevehicle_classRequest;

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
     * @param  \App\Http\Requests\Storevehicle_classRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storevehicle_classRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehicle_class  $vehicle_class
     * @return \Illuminate\Http\Response
     */
    public function show(vehicle_class $vehicle_class)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehicle_class  $vehicle_class
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicle_class $vehicle_class)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatevehicle_classRequest  $request
     * @param  \App\Models\vehicle_class  $vehicle_class
     * @return \Illuminate\Http\Response
     */
    public function update(Updatevehicle_classRequest $request, vehicle_class $vehicle_class)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehicle_class  $vehicle_class
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicle_class $vehicle_class)
    {
        //
    }
}

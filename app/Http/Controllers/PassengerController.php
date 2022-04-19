<?php

namespace App\Http\Controllers;

use App\Models\passenger;
use App\Http\Requests\StorepassengerRequest;
use App\Http\Requests\UpdatepassengerRequest;

class PassengerController extends Controller
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
     * @param  \App\Http\Requests\StorepassengerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepassengerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function show(passenger $passenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(passenger $passenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepassengerRequest  $request
     * @param  \App\Models\passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepassengerRequest $request, passenger $passenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(passenger $passenger)
    {
        //
    }
}

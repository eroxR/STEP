<?php

namespace App\Http\Controllers;

use App\Models\maritalStatus;
use App\Http\Requests\StoremaritalStatusRequest;
use App\Http\Requests\UpdatemaritalStatusRequest;

class MaritalStatusController extends Controller
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
     * @param  \App\Http\Requests\StoremaritalStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremaritalStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\maritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function show(maritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\maritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(maritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemaritalStatusRequest  $request
     * @param  \App\Models\maritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemaritalStatusRequest $request, maritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\maritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(maritalStatus $maritalStatus)
    {
        //
    }
}

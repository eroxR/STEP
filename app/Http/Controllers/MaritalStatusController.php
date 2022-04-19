<?php

namespace App\Http\Controllers;

use App\Models\marital_status;
use App\Http\Requests\Storemarital_statusRequest;
use App\Http\Requests\Updatemarital_statusRequest;

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
     * @param  \App\Http\Requests\Storemarital_statusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemarital_statusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\marital_status  $marital_status
     * @return \Illuminate\Http\Response
     */
    public function show(marital_status $marital_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marital_status  $marital_status
     * @return \Illuminate\Http\Response
     */
    public function edit(marital_status $marital_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemarital_statusRequest  $request
     * @param  \App\Models\marital_status  $marital_status
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemarital_statusRequest $request, marital_status $marital_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marital_status  $marital_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(marital_status $marital_status)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\alertStatus;
use App\Http\Requests\StorealertStatusRequest;
use App\Http\Requests\UpdatealertStatusRequest;

class AlertStatusController extends Controller
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
     * @param  \App\Http\Requests\StorealertStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorealertStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alertStatus  $alertStatus
     * @return \Illuminate\Http\Response
     */
    public function show(alertStatus $alertStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alertStatus  $alertStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(alertStatus $alertStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatealertStatusRequest  $request
     * @param  \App\Models\alertStatus  $alertStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealertStatusRequest $request, alertStatus $alertStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alertStatus  $alertStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(alertStatus $alertStatus)
    {
        //
    }
}

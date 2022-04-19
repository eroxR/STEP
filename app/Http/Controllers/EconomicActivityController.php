<?php

namespace App\Http\Controllers;

use App\Models\economic_activity;
use App\Http\Requests\Storeeconomic_activityRequest;
use App\Http\Requests\Updateeconomic_activityRequest;

class EconomicActivityController extends Controller
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
     * @param  \App\Http\Requests\Storeeconomic_activityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeeconomic_activityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\economic_activity  $economic_activity
     * @return \Illuminate\Http\Response
     */
    public function show(economic_activity $economic_activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\economic_activity  $economic_activity
     * @return \Illuminate\Http\Response
     */
    public function edit(economic_activity $economic_activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateeconomic_activityRequest  $request
     * @param  \App\Models\economic_activity  $economic_activity
     * @return \Illuminate\Http\Response
     */
    public function update(Updateeconomic_activityRequest $request, economic_activity $economic_activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\economic_activity  $economic_activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(economic_activity $economic_activity)
    {
        //
    }
}

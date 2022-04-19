<?php

namespace App\Http\Controllers;

use App\Models\alertType;
use App\Http\Requests\StorealertTypeRequest;
use App\Http\Requests\UpdatealertTypeRequest;

class AlertTypeController extends Controller
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
     * @param  \App\Http\Requests\StorealertTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorealertTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alertType  $alertType
     * @return \Illuminate\Http\Response
     */
    public function show(alertType $alertType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alertType  $alertType
     * @return \Illuminate\Http\Response
     */
    public function edit(alertType $alertType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatealertTypeRequest  $request
     * @param  \App\Models\alertType  $alertType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealertTypeRequest $request, alertType $alertType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alertType  $alertType
     * @return \Illuminate\Http\Response
     */
    public function destroy(alertType $alertType)
    {
        //
    }
}

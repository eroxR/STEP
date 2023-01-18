<?php

namespace App\Http\Controllers;

use App\Models\bloodType;
use App\Http\Requests\StorebloodTypeRequest;
use App\Http\Requests\UpdatebloodTypeRequest;

class BloodTypeController extends Controller
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
     * @param  \App\Http\Requests\StorebloodTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebloodTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bloodType  $bloodType
     * @return \Illuminate\Http\Response
     */
    public function show(bloodType $bloodType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bloodType  $bloodType
     * @return \Illuminate\Http\Response
     */
    public function edit(bloodType $bloodType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebloodTypeRequest  $request
     * @param  \App\Models\bloodType  $bloodType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebloodTypeRequest $request, bloodType $bloodType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bloodType  $bloodType
     * @return \Illuminate\Http\Response
     */
    public function destroy(bloodType $bloodType)
    {
        //
    }
}

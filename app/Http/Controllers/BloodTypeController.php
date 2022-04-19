<?php

namespace App\Http\Controllers;

use App\Models\blood_type;
use App\Http\Requests\Storeblood_typeRequest;
use App\Http\Requests\Updateblood_typeRequest;

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
     * @param  \App\Http\Requests\Storeblood_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblood_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function show(blood_type $blood_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function edit(blood_type $blood_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateblood_typeRequest  $request
     * @param  \App\Models\blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updateblood_typeRequest $request, blood_type $blood_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blood_type  $blood_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(blood_type $blood_type)
    {
        //
    }
}

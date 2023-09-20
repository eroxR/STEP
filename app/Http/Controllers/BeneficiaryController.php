<?php

namespace App\Http\Controllers;

use App\Models\beneficiary;
use App\Http\Requests\StorebeneficiaryRequest;
use App\Http\Requests\UpdatebeneficiaryRequest;

class BeneficiaryController extends Controller
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
     * @param  \App\Http\Requests\StorebeneficiaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebeneficiaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show(beneficiary $beneficiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit(beneficiary $beneficiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebeneficiaryRequest  $request
     * @param  \App\Models\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebeneficiaryRequest $request, beneficiary $beneficiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(beneficiary $beneficiary)
    {
        //
    }
}

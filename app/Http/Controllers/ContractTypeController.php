<?php

namespace App\Http\Controllers;

use App\Models\contractType;
use App\Http\Requests\StorecontractTypeRequest;
use App\Http\Requests\UpdatecontractTypeRequest;

class ContractTypeController extends Controller
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
     * @param  \App\Http\Requests\StorecontractTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecontractTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contractType  $contractType
     * @return \Illuminate\Http\Response
     */
    public function show(contractType $contractType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contractType  $contractType
     * @return \Illuminate\Http\Response
     */
    public function edit(contractType $contractType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontractTypeRequest  $request
     * @param  \App\Models\contractType  $contractType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontractTypeRequest $request, contractType $contractType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contractType  $contractType
     * @return \Illuminate\Http\Response
     */
    public function destroy(contractType $contractType)
    {
        //
    }
}

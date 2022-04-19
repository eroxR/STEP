<?php

namespace App\Http\Controllers;

use App\Models\contract_type;
use App\Http\Requests\Storecontract_typeRequest;
use App\Http\Requests\Updatecontract_typeRequest;

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
     * @param  \App\Http\Requests\Storecontract_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecontract_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contract_type  $contract_type
     * @return \Illuminate\Http\Response
     */
    public function show(contract_type $contract_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contract_type  $contract_type
     * @return \Illuminate\Http\Response
     */
    public function edit(contract_type $contract_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecontract_typeRequest  $request
     * @param  \App\Models\contract_type  $contract_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecontract_typeRequest $request, contract_type $contract_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contract_type  $contract_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(contract_type $contract_type)
    {
        //
    }
}

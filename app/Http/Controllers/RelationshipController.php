<?php

namespace App\Http\Controllers;

use App\Models\relationship;
use App\Http\Requests\StorerelationshipRequest;
use App\Http\Requests\UpdaterelationshipRequest;

class RelationshipController extends Controller
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
     * @param  \App\Http\Requests\StorerelationshipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerelationshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function show(relationship $relationship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function edit(relationship $relationship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterelationshipRequest  $request
     * @param  \App\Models\relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterelationshipRequest $request, relationship $relationship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\relationship  $relationship
     * @return \Illuminate\Http\Response
     */
    public function destroy(relationship $relationship)
    {
        //
    }
}

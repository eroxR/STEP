<?php

namespace App\Http\Controllers;

use App\Models\permit;
use App\Http\Requests\StorepermitRequest;
use App\Http\Requests\UpdatepermitRequest;

class PermitController extends Controller
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
     * @param  \App\Http\Requests\StorepermitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepermitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(permit $permit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function edit(permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepermitRequest  $request
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepermitRequest $request, permit $permit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy(permit $permit)
    {
        //
    }
}

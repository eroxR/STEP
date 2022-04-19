<?php

namespace App\Http\Controllers;

use App\Models\arl;
use App\Http\Requests\StorearlRequest;
use App\Http\Requests\UpdatearlRequest;

class ArlController extends Controller
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
     * @param  \App\Http\Requests\StorearlRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearlRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function show(arl $arl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function edit(arl $arl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearlRequest  $request
     * @param  \App\Models\arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearlRequest $request, arl $arl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\arl  $arl
     * @return \Illuminate\Http\Response
     */
    public function destroy(arl $arl)
    {
        //
    }
}

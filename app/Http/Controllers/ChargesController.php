<?php

namespace App\Http\Controllers;

use App\Models\charges;
use App\Http\Requests\StorechargesRequest;
use App\Http\Requests\UpdatechargesRequest;

class ChargesController extends Controller
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
     * @param  \App\Http\Requests\StorechargesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorechargesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function show(charges $charges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function edit(charges $charges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatechargesRequest  $request
     * @param  \App\Models\charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatechargesRequest $request, charges $charges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\charges  $charges
     * @return \Illuminate\Http\Response
     */
    public function destroy(charges $charges)
    {
        //
    }
}

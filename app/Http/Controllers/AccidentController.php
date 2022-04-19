<?php

namespace App\Http\Controllers;

use App\Models\accident;
use App\Http\Requests\StoreaccidentRequest;
use App\Http\Requests\UpdateaccidentRequest;

class AccidentController extends Controller
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
     * @param  \App\Http\Requests\StoreaccidentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaccidentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function show(accident $accident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function edit(accident $accident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaccidentRequest  $request
     * @param  \App\Models\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaccidentRequest $request, accident $accident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accident  $accident
     * @return \Illuminate\Http\Response
     */
    public function destroy(accident $accident)
    {
        //
    }
}

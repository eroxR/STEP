<?php

namespace App\Http\Controllers;

use App\Models\eps;
use App\Http\Requests\StoreepsRequest;
use App\Http\Requests\UpdateepsRequest;

class EpsController extends Controller
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
     * @param  \App\Http\Requests\StoreepsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreepsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function show(eps $eps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function edit(eps $eps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateepsRequest  $request
     * @param  \App\Models\eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateepsRequest $request, eps $eps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function destroy(eps $eps)
    {
        //
    }
}

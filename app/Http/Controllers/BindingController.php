<?php

namespace App\Http\Controllers;

use App\Models\binding;
use App\Http\Requests\StorebindingRequest;
use App\Http\Requests\UpdatebindingRequest;

class BindingController extends Controller
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
     * @param  \App\Http\Requests\StorebindingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebindingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\binding  $binding
     * @return \Illuminate\Http\Response
     */
    public function show(binding $binding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\binding  $binding
     * @return \Illuminate\Http\Response
     */
    public function edit(binding $binding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebindingRequest  $request
     * @param  \App\Models\binding  $binding
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebindingRequest $request, binding $binding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\binding  $binding
     * @return \Illuminate\Http\Response
     */
    public function destroy(binding $binding)
    {
        //
    }
}

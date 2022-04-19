<?php

namespace App\Http\Controllers;

use App\Models\provinces;
use App\Http\Requests\StoreprovincesRequest;
use App\Http\Requests\UpdateprovincesRequest;

class ProvincesController extends Controller
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
     * @param  \App\Http\Requests\StoreprovincesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprovincesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function show(provinces $provinces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function edit(provinces $provinces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprovincesRequest  $request
     * @param  \App\Models\provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprovincesRequest $request, provinces $provinces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\provinces  $provinces
     * @return \Illuminate\Http\Response
     */
    public function destroy(provinces $provinces)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\workArea;
use App\Http\Requests\StoreworkAreaRequest;
use App\Http\Requests\UpdateworkAreaRequest;

class WorkAreaController extends Controller
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
     * @param  \App\Http\Requests\StoreworkAreaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreworkAreaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workArea  $workArea
     * @return \Illuminate\Http\Response
     */
    public function show(workArea $workArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workArea  $workArea
     * @return \Illuminate\Http\Response
     */
    public function edit(workArea $workArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworkAreaRequest  $request
     * @param  \App\Models\workArea  $workArea
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateworkAreaRequest $request, workArea $workArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workArea  $workArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(workArea $workArea)
    {
        //
    }
}

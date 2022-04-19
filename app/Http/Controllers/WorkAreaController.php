<?php

namespace App\Http\Controllers;

use App\Models\work_area;
use App\Http\Requests\Storework_areaRequest;
use App\Http\Requests\Updatework_areaRequest;

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
     * @param  \App\Http\Requests\Storework_areaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storework_areaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\work_area  $work_area
     * @return \Illuminate\Http\Response
     */
    public function show(work_area $work_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\work_area  $work_area
     * @return \Illuminate\Http\Response
     */
    public function edit(work_area $work_area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatework_areaRequest  $request
     * @param  \App\Models\work_area  $work_area
     * @return \Illuminate\Http\Response
     */
    public function update(Updatework_areaRequest $request, work_area $work_area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\work_area  $work_area
     * @return \Illuminate\Http\Response
     */
    public function destroy(work_area $work_area)
    {
        //
    }
}

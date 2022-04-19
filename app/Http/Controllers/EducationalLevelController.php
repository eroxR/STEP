<?php

namespace App\Http\Controllers;

use App\Models\educational_level;
use App\Http\Requests\Storeeducational_levelRequest;
use App\Http\Requests\Updateeducational_levelRequest;

class EducationalLevelController extends Controller
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
     * @param  \App\Http\Requests\Storeeducational_levelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeeducational_levelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function show(educational_level $educational_level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function edit(educational_level $educational_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateeducational_levelRequest  $request
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function update(Updateeducational_levelRequest $request, educational_level $educational_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\educational_level  $educational_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(educational_level $educational_level)
    {
        //
    }
}

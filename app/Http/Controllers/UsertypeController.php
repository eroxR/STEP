<?php

namespace App\Http\Controllers;

use App\Models\usertype;
use App\Http\Requests\StoreusertypeRequest;
use App\Http\Requests\UpdateusertypeRequest;

class UsertypeController extends Controller
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
     * @param  \App\Http\Requests\StoreusertypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreusertypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function show(usertype $usertype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function edit(usertype $usertype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateusertypeRequest  $request
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateusertypeRequest $request, usertype $usertype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usertype  $usertype
     * @return \Illuminate\Http\Response
     */
    public function destroy(usertype $usertype)
    {
        //
    }
}

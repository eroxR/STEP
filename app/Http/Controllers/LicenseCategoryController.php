<?php

namespace App\Http\Controllers;

use App\Models\licenseCategory;
use App\Http\Requests\StorelicenseCategoryRequest;
use App\Http\Requests\UpdatelicenseCategoryRequest;

class LicenseCategoryController extends Controller
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
     * @param  \App\Http\Requests\StorelicenseCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelicenseCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\licenseCategory  $licenseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(licenseCategory $licenseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\licenseCategory  $licenseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(licenseCategory $licenseCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelicenseCategoryRequest  $request
     * @param  \App\Models\licenseCategory  $licenseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelicenseCategoryRequest $request, licenseCategory $licenseCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\licenseCategory  $licenseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(licenseCategory $licenseCategory)
    {
        //
    }
}

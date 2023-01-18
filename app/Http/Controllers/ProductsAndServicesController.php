<?php

namespace App\Http\Controllers;

use App\Models\productsAndServices;
use App\Http\Requests\StoreproductsAndServicesRequest;
use App\Http\Requests\UpdateproductsAndServicesRequest;

class ProductsAndServicesController extends Controller
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
     * @param  \App\Http\Requests\StoreproductsAndServicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductsAndServicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productsAndServices  $productsAndServices
     * @return \Illuminate\Http\Response
     */
    public function show(productsAndServices $productsAndServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productsAndServices  $productsAndServices
     * @return \Illuminate\Http\Response
     */
    public function edit(productsAndServices $productsAndServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductsAndServicesRequest  $request
     * @param  \App\Models\productsAndServices  $productsAndServices
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductsAndServicesRequest $request, productsAndServices $productsAndServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productsAndServices  $productsAndServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(productsAndServices $productsAndServices)
    {
        //
    }
}

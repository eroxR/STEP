<?php

namespace App\Http\Controllers;

use App\Models\products_services;
use App\Http\Requests\Storeproducts_servicesRequest;
use App\Http\Requests\Updateproducts_servicesRequest;

class ProductsServicesController extends Controller
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
     * @param  \App\Http\Requests\Storeproducts_servicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproducts_servicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products_services  $products_services
     * @return \Illuminate\Http\Response
     */
    public function show(products_services $products_services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products_services  $products_services
     * @return \Illuminate\Http\Response
     */
    public function edit(products_services $products_services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproducts_servicesRequest  $request
     * @param  \App\Models\products_services  $products_services
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproducts_servicesRequest $request, products_services $products_services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products_services  $products_services
     * @return \Illuminate\Http\Response
     */
    public function destroy(products_services $products_services)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\paymentType;
use App\Http\Requests\StorepaymentTypeRequest;
use App\Http\Requests\UpdatepaymentTypeRequest;

class PaymentTypeController extends Controller
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
     * @param  \App\Http\Requests\StorepaymentTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaymentTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function show(paymentType $paymentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function edit(paymentType $paymentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaymentTypeRequest  $request
     * @param  \App\Models\paymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaymentTypeRequest $request, paymentType $paymentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentType $paymentType)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\payment_type;
use App\Http\Requests\Storepayment_typeRequest;
use App\Http\Requests\Updatepayment_typeRequest;

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
     * @param  \App\Http\Requests\Storepayment_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepayment_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function show(payment_type $payment_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function edit(payment_type $payment_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepayment_typeRequest  $request
     * @param  \App\Models\payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepayment_typeRequest $request, payment_type $payment_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment_type  $payment_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment_type $payment_type)
    {
        //
    }
}

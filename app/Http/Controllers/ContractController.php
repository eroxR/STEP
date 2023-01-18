<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Http\Requests\StorecontractRequest;
use App\Http\Requests\UpdatecontractRequest;

use App\Models\vehicle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use NumberFormatter;
use PDF;

class ContractController extends Controller
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

    public function pdf($id)
    // $id )
    {

        $contracts = DB::table('contracts')->where('id', $id)->get();

        $date_start_contract = DB::table('contracts')->where('id', $id)->value('date_start_contract');

        $contract_end_date = DB::table('contracts')->where('id', $id)->value('contract_end_date');

        $contract_signing_date = DB::table('contracts')->where('id', $id)->value('contract_signing_date');

        $contract_value = DB::table('contracts')->where('id', $id)->value('contract_value');

        $tipe_pay = DB::table('contracts')->join('payment_types', 'contracts.tipe_pay', '=', 'payment_types.id')
        ->where('contracts.id', $id)->value('description_typePayment');

        $vehicles = DB::table('vehicles')->join('contract_vehicle_permit', 'contract_vehicle_permit.vehicle_id', '=', 'vehicles.id')
        ->join('vehicle_types', 'vehicles.vehicle_type', '=', 'vehicle_types.id')
        ->where('contract_vehicle_permit.contract_id', $id)->limit(1)->get();

        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        $fstart = Carbon::createFromDate($date_start_contract);
        $fend = Carbon::createFromDate($contract_end_date);
        $difmont = date_diff($fend, $fstart)->format('%m');
        $difdaytotal = $fend->diffInDays($fstart);
        $difday = $difdaytotal - ($difmont * 30);//preguntar como cuentan los meses si es um mes de 31 si lo cuentas por 31 dias o por 30 dias mas 1
        // $difday = $difdaytotal;
        // $fstart = $fstart->monthName;
        // $fstart = $fstart->format('l d \d\e F \d\e\l Y');
        $firme = Carbon::parse($contract_signing_date);
        $firmeday = $firme->day;
        $firmeyear = $firme->year;
        $firmemonth = $firme->monthName;
        $fstart = $fstart->isoFormat('D \d\e MMMM \d\e\l Y');
        $fend = $fend->isoFormat('D \d\e MMMM \d\e\l Y');
        $formatterES = new NumberFormatter("es", NumberFormatter::SPELLOUT);
        $difdayletter =  $formatterES->format($difday);

        // $formatterES = new NumberFormatter("es", NumberFormatter::SPELLOUT);
        $valueContractText =  $formatterES->format($contract_value);
        $fyear = Carbon::parse(now());
        $fyear = $fyear->year;

        $pdf = PDF::loadView('pdfs.pdf-contracts', [
            'contracts' => $contracts,
            'firmeday' => $firmeday,
            'firmeyear' => $firmeyear,
            'firmemonth' => $firmemonth,
            'fend' => $fend,
            'fstart' => $fstart,
            'difmont' => $difmont,
            'difday' => $difday,
            'difdayletter' => $difdayletter,
            'vehicles' => $vehicles,
            'valueContractText' => $valueContractText,
            'tipe_pay' => $tipe_pay,
            'fyear' => $fyear
        ]);
        // $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

        // return view('pdfs.pdf-contracts');
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
     * @param  \App\Http\Requests\StorecontractRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecontractRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontractRequest  $request
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontractRequest $request, contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(contract $contract)
    {
        //
    }
}

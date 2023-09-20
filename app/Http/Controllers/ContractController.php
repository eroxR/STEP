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

        $tipeIdentificationRepresentLegal = DB::table('contracts')->join('identifications', 'contracts.identification_represent_legal', '=', 'identifications.id')
            ->where('contracts.id', $id)->value('description_identification');

        $tipeIdentificationcardRepresentativeGroup = DB::table('contracts')->join('identifications', 'contracts.identificationcard_representative_group', '=', 'identifications.id')
            ->where('contracts.id', $id)->value('description_identification');

        $tipeidentification = DB::table('contracts')->join('identifications', 'contracts.identification', '=', 'identifications.id')
            ->where('contracts.id', $id)->value('description_identification');
            
        $date_start_contract = DB::table('contracts')->where('id', $id)->value('date_start_contract');

        $contract_end_date = DB::table('contracts')->where('id', $id)->value('contract_end_date');

        $contract_signing_date = DB::table('contracts')->where('id', $id)->value('contract_signing_date');

        $contract_value = DB::table('contracts')->where('id', $id)->value('contract_value');


        $contract_route = DB::table('contracts')->where('id', $id)->value('route_trip_contract');

        $route_from = ucfirst( substr($contract_route,0,strpos($contract_route , ',')));
        $route_to = ucfirst( substr($contract_route,strpos($contract_route , ',')+1));

        $tipe_pay = DB::table('contracts')->join('payment_types', 'contracts.tipe_pay', '=', 'payment_types.id')
            ->where('contracts.id', $id)->value('description_typePayment');

        $vehicles = DB::table('vehicles')
            ->select('plate_vehicle', 'brand_vehicle', 'model_vehicle', 'cylinder_vehicle',
            'engine_number', 'vehicle_class_description', 'vehicle_type_name', 'vehicle_chassis_number',
            'number_passenger', 'side_vehicle', DB::raw('CONCAT(users.firstname," ",users.lastname) As owner'))
            ->join('contract_vehicle_permit', 'contract_vehicle_permit.vehicle_id', '=', 'vehicles.id')
            ->join('vehicle_types', 'vehicles.vehicle_type', '=', 'vehicle_types.id')
            ->join('users', 'vehicles.owner_vehicle', '=', 'users.id')
            ->join('vehicle_classes', 'vehicles.infrastructure_vehicle', '=', 'vehicle_classes.id')
            ->where('contract_vehicle_permit.contract_id', $id)->limit(1)->get();

        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
        $fstart = Carbon::createFromDate($date_start_contract);
        $fend = Carbon::createFromDate($contract_end_date);
        $difmont = date_diff($fend, $fstart)->format('%m');
        $difyear = date_diff($fend, $fstart)->format('%y');
        $difdaytotal = $fend->diffInDays($fstart);
        $difday = $difdaytotal - ($difmont * 30); //preguntar como cuentan los meses si es um mes de 31 si lo cuentan por 31 dias o por 30 dias mas 1
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

        $titletypecontract = DB::table('contracts')->where('id', $id)->value('type_contract');
        $titlecontractwith = DB::table('contracts')->where('id', $id)->value('contract_with');

        if ($titletypecontract == 1) {
            if ($titlecontractwith == 1 ) {
                $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE DE ESTUDIANTE GRUPO PADRES';
            } else if ($titlecontractwith == 2 ){
                $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS PARA TRANSPORTE ESPECIAL DE UN GRUPO DE ESTUDIANTES UNIVERSITARIOS MAYORES DE EDAD';
            } else if ($titlecontractwith == 3 ){
                $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL DE ESTUDIANTE CON ACUDIENTE';
            } else {
                $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS PARA TRANSPORTE ESPECIAL DE ESTUDIANTES';
            }
        } else if($titletypecontract == 2) {
            $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL EMPRESARIAL';
        } else if($titletypecontract == 3) {
            $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS PARA TRANSPORTE ESPECIAL DE TURISTAS';
        } else if($titletypecontract == 4) {
            $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS DE TRANSPORTE ESPECIAL CON GRUPO ESPECÍFICO DE USUARIOS (TRANSPORTE DE PARTICULARES)';
        } else if($titletypecontract == 5) {
            $titlecontract = 'CONTRATO DE PRESTACIÓN DE SERVICIOS PARA TRANSPORTE ESPECIAL DE USUARIOS DE SALUD';
        } else if($titletypecontract == 6) {
            $titlecontract = 'CONTRATO DE CONVENIO DE COLABORACIÓN EMPRESARIAL';
        } else if($titletypecontract == 7) {
            $titlecontract = 'CONTRATO DE VINCULACIÓN DE FLOTA - RENOVACIÓN PROPIETARIO DE VEHÍCULO';
        }
        
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
            'fyear' => $fyear,
            'titlecontract' => $titlecontract,
            'fStartDay' => $fStartDay,
            'fStartMont' => $fStartMont,
            'fStartYear' => $fStartYear,
            'fEndDay' => $fEndDay,
            'fEndMont' => $fEndMont,
            'fEndYear' => $fEndYear,
            'route_from' => $route_from,
            'route_to' => $route_to,
            'tipeidentification' => $tipeidentification,
            'tipeIdentificationRepresentLegal' => $tipeIdentificationRepresentLegal,
            'difyear' => $difyear,
            'tipeIdentificationcardRepresentativeGroup' => $tipeIdentificationcardRepresentativeGroup
            

        ]);
        // $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

        // return view('pdfs.pdf-contracts', compact(            
        //     'contracts',
        //     'firmeday',
        //     'firmeyear',
        //     'firmemonth',
        //     'fend',
        //     'fstart',
        //     'difmont',
        //     'difday',
        //     'difdayletter',
        //     'vehicles',
        //     'valueContractText',
        //     'tipe_pay',
        //     'fyear',
        //     'titlecontract',
        //     'fStartDay',
        //     'fStartMont',
        //     'fStartYear',
        //     'fEndDay',
        //     'fEndMont',
        //     'fEndYear',
        //     'route_from',
        //     'route_to',
        //     'tipeidentification',
        //     'tipeIdentificationRepresentLegal',
        //     'difyear',
        //     'tipeIdentificationcardRepresentativeGroup'));
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

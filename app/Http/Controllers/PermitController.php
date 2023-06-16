<?php

namespace App\Http\Controllers;

use App\Models\permit;
use App\Http\Requests\StorepermitRequest;
use App\Http\Requests\UpdatepermitRequest;

use App\Models\driver;
use App\Models\vehicle;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use PDF;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return view('pdfs.index');
    }

    public function publicfuec ($id)
    {
        $result = $id;
        return view('pdfs.permit-public', compact('result'));
    }

    public function pdf($id)
    // $id )
    {
        $contador = 0;

        $permits = DB::table('permits')->where('id', $id)->get();

        // $contract_number = DB::select('select contract_number from contracts inner join
        // permits on contracts.id = contract where permits.id = ?', [$id]);
        // $contract_number = $contract_number[0]->contract_number;

        $contract_number = DB::table('contracts')->join('permits', 'contracts.id', '=', 'permits.contract')
        ->where('permits.id', $id)->value('contract_number');

        $contractdatas = permit::join('contracts', 'permits.contract', '=', 'contracts.id')
        ->select('contracting_name', 'contract_document', 'contracting_phone', 'contracting_direction', 'total_disposition')
        ->where('permits.id', '=', $id)->get();

        // $tipeContracts = DB::select('select type_contract from contracts inner join
        // permits on contracts.id = contract where permits.id = ?', [$id]);
        // $tipeContracts = $tipeContracts[0]->type_contract;

        $tipeContracts = DB::table('contracts')->join('permits', 'contracts.id', '=', 'permits.contract')
        ->where('permits.id', $id)->value('type_contract');

        // $permit_start_date = DB::select('select permit_start_date from permits where id = ?', [$id]);
        // $permit_start_date = $permit_start_date[0]->permit_start_date;

        $permit_start_date = DB::table('permits')->where('id', $id)->value('permit_start_date');

        // $permit_end_date = DB::select('select permit_end_date from permits where id = ?', [$id]);
        // $permit_end_date = $permit_end_date[0]->permit_end_date;

        $permit_end_date = DB::table('permits')->where('id', $id)->value('permit_end_date');

        $vehicledatas = vehicle::join('contract_vehicle_permit', 'contract_vehicle_permit.vehicle_id', '=', 'vehicles.id')
        ->join('vehicle_types', 'vehicles.vehicle_type', '=', 'vehicle_types.id')
        ->select('vehicle_type_name', 'brand_vehicle', 'model_vehicle', 'plate_vehicle', 'side_vehicle','card_operation')
        ->where('contract_vehicle_permit.permit_id', '=', $id)->limit(1)->get();    
        
        $driverdatas = driver::join('driver_permit', 'driver_permit.driver_id', '=', 'drivers.id')
        ->join('users', 'drivers.user_id', '=', 'users.id')
        ->select(DB::raw('CONCAT(users.firstname, " ",users.secondname, " ", users.lastname, " ",users.motherslastname) As operator'), 'users.identificationcard', 'license_number', 'license_expiration')
        ->where('driver_permit.permit_id', '=', $id)->get(); 

        // $date_start_contract = DB::select('select date_start_contract from contracts where id = ?', [$id]);
        // $date_start_contract = $date_start_contract[0]->date_start_contract;

        $permitStart = Carbon::parse($permit_start_date);
        $permitStartday = $permitStart->day;
        $permitStartyear = $permitStart->year;
        $permitStartmonth = $permitStart->month;

        $permitEnd = Carbon::parse($permit_end_date);
        $permitEndday = $permitEnd->day;
        $permitEndyear = $permitEnd->year;
        $permitEndmonth = $permitEnd->month;

        $pdf = PDF::loadView('pdfs.pdf-fuec', [
            'permits' => $permits,
            'contract_number' => $contract_number,
            'tipeContracts' => $tipeContracts,
            'contractdatas' => $contractdatas,
            'permitStartday' => $permitStartday,
            'permitStartyear' => $permitStartyear,
            'permitStartmonth' => $permitStartmonth,
            'permitEndday' => $permitEndday,
            'permitEndyear' => $permitEndyear,
            'permitEndmonth' => $permitEndmonth,
            'vehicledatas' => $vehicledatas,
            'driverdatas' => $driverdatas,
            'contador' => $contador

        ]);
        // $pdf->loadHTML('<h1>Test</h1>');
        // $pdf->setpaper(array(0, 0, 216, 279), 'portrait');
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
     * @param  \App\Http\Requests\StorepermitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepermitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(permit $permit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function edit(permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepermitRequest  $request
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepermitRequest $request, permit $permit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy(permit $permit)
    {
        //
    }
}

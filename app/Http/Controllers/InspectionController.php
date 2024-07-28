<?php

namespace App\Http\Controllers;

use App\Models\driver;
use App\Models\inspection;
use App\Models\inspectionCategory;
use App\Models\User;
use App\Models\vehicle;
use Carbon\Carbon;
use DateTime;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;

class InspectionController extends Controller
{
    //
    public function inspection()
    {
        //
        $cars = vehicle::pluck('plate_vehicle', 'id');
        $inspectionsCategory = inspectionCategory::pluck('name_description', 'id');
        $inspections = inspection::select('id', 'name_description', 'category')->get();
        return view('processes.inspection-form', compact('cars', 'inspectionsCategory', 'inspections'));
    }

    public function store(Request $request)
    {

        date_default_timezone_set("America/Bogota"); //Zona horaria de Colombia 
        // return $request->all();
        // return $request->answer3;

        // $end_date =  '2024-01-04'; // 1975-05-21 22:00:00

        // $fechaCarbon = Carbon::createFromFormat('Y-m-d', $end_date);

        // $end_date = $fechaCarbon->format('Y-m-d');

        // $hoy = $end_date;
        // $hoy = Carbon::now();
        // $hoy = Carbon::parse('2024-05-28')->format('Y-m-d');
        $hoy = Carbon::parse(Carbon::now())->format('Y-m-d');

        // dd($hoy);
        $fechaCarbon = Carbon::createFromFormat('Y-m-d', $hoy);

        $nowyear = $fechaCarbon->year;
        $nowmonth = $fechaCarbon->month;
        $start_date =  $nowyear . '-' . $nowmonth . '-01'; // 1975-05-21 22:00:00
        // Convertir la cadena de fecha a un objeto Carbon
        $fechaCarbon = Carbon::createFromFormat('Y-m-d', $start_date);
        // Formatear la fecha sin horas, minutos y segundos
        $start_date = $fechaCarbon->format('Y-m-d');

        $numdays = cal_days_in_month(CAL_GREGORIAN, $nowmonth, $nowyear);

        $end_date =   $nowyear . '-' . $nowmonth . '-' . $numdays; // 1975-05-21 22:00:00
        // Convertir la cadena de fecha a un objeto Carbon
        $fechaCarbon = Carbon::createFromFormat('Y-m-d', $end_date);
        // Formatear la fecha sin horas, minutos y segundos
        $end_date = $fechaCarbon->format('Y-m-d');

        // dd($hoy,$start_date,$end_date);


        $datesEnd = DB::table('vehicle_inspection')->where('id_vehicle', $request->vehicle)->where('dates_start', $start_date)->value('dates_end');

        if ($hoy == $datesEnd) {
            // dd($alreadyInspected);
            return redirect()->route('processes.inspection-form')->with('success', 'no');
        }

        $existInspection = DB::table('vehicle_inspection')->where('id_vehicle', $request->vehicle)->where('dates_start', $start_date)->value('id');

        $observing = false;
        $observation = '';
        // dd($existInspection);

        if (!empty($existInspection)) {

            
            // $datesEnd = Carbon::createFromFormat('Y-m-d', '2024-04-06');
            $isNow = Carbon::parse($datesEnd)->addDay()->format('Y-m-d');
            $uninspectedArrays = DB::table('vehicle_inspection')->where('id', $existInspection)->value('uninspected');
            $weekendArrays = DB::table('vehicle_inspection')->where('id', $existInspection)->value('weekend_array');
            $fecha1 = new DateTime($hoy);
            $fecha2 = new DateTime($isNow);
            $intervalo = $fecha2->diff($fecha1);
            $diferencia = $intervalo->days;

            // dd($diferencia);

            // $uninspectedArrays = '';}

            $weekens = Carbon::createFromFormat('Y-m-d', $isNow)->isoFormat('dddd');
            $weekensHoy = Carbon::createFromFormat('Y-m-d', $hoy)->isoFormat('dddd');
            $datesArray = DB::table('vehicle_inspection')->where('id_vehicle', $request->vehicle)->where('dates_start', $start_date)->value('array_dates');
            $inspectionArray = DB::table('vehicle_inspection')->where('id_vehicle', $request->vehicle)->where('dates_start', $start_date)->value('array_inspection');

            
            for ($i = 1; $i <= 43; $i++) {
                if (in_array($weekensHoy, ['domingo', 'sábado']) && $hoy != $start_date) {
                    break;
                }

                $contador = 'answer' . $i;

                if ($request->$contador == "") {
                    return redirect()->route('processes.inspection-form')->with('success', 'nul');
                }
                // dd($contador);
                if ($request->$contador == 1) {
                    // dd($contador);
                    $datesArray .= ($datesArray != '') ? '/' . $hoy : $hoy;
                    $inspectionArray .= ($inspectionArray != '') ? '/' . $i : $i;

                    $observing = true;
                }
            }

            // dd($uninspectedArrays,$isNow,$hoy);
            for ($i = 0; $i < $diferencia; $i++) {
                $weekens = Carbon::createFromFormat('Y-m-d', $isNow)->isoFormat('dddd');

                if ($isNow == $hoy) {
                    break;
                } else if (in_array($weekens, ['domingo', 'sábado']) && $hoy != $start_date) {
                    $weekendArrays .= ($weekendArrays != '') ? '/' . $isNow : $isNow;
                } else {
                    // if (!Str::contains($uninspectedArrays, $isNow)) {
                    $uninspectedArrays .= ($uninspectedArrays != '') ? '/' . $isNow : $isNow;
                    // $uninspectedArrays .= '/' . $isNow;
                    // }
                }

                $isNow = Carbon::parse($isNow)->addDay()->format('Y-m-d');
            }

            // $datesArray = '';
            
            // $inspectionArray = '';


            // $observation = '';



            // dd($uninspectedArrays,$isNow);
            // dd($observation);
            
            if ($observing && $request->observations == '') {
                return redirect()->route('processes.inspection-form')->with('success', 'obs');
            }

            $observation = DB::table('vehicle_inspection')->where('id_vehicle', $request->vehicle)->where('dates_start', $start_date)->value('observations');
            if ($observing && $request->observations != '') {
                $observation .= ($observation != '') ? '/' . 'OBS:' . $hoy . '  ' . $request->observations : 'OBS:' . $hoy . '  ' . $request->observations;
            }
            

            DB::table('vehicle_inspection')->where('id', $existInspection)->update([
                // 'id_vehicle' => $existInspection,
                // 'dates_start' => ,
                'dates_end' => $hoy,
                'uninspected' => $uninspectedArrays,
                'responsible' => $request->responsible,
                // 'mileage_start' => ,
                'mileage_end' => $request->Mileage,
                'array_dates' => $datesArray,
                'array_inspection' => $inspectionArray,
                'weekend_array' => $weekendArrays,
                'observations' => $observation,

            ]);


        } else {
            // dd('no');

            $datesArray = '';
            $inspectionArray = '';
            $uninspectedArrays = '';
            $weekendArrays = '';
            $isNow = $start_date;

            for ($i = 1; $i <= 43; $i++) {

                $contador = 'answer' . $i;

                if ($request->$contador == "") {
                    return redirect()->route('processes.inspection-form')->with('success', 'nul');
                }

                // dd($contador);
                if ($request->$contador == 1) {
                    // dd($contador);
                    $datesArray .= ($datesArray != '') ? '/' . $hoy : $hoy;
                    $inspectionArray .= ($inspectionArray != '') ? '/' . $i : $i;

                    $observing = true;
                }
            }

            // dd($datesArray,$inspectionArray);

            if ($hoy != $start_date) {
                $fecha1 = new DateTime($hoy);
                $fecha2 = new DateTime($start_date);
                $intervalo = $fecha2->diff($fecha1);
                $diferencia = $intervalo->days;

                
                

                for ($i = 0; $i < $diferencia; $i++) {
                    $weekens = Carbon::createFromFormat('Y-m-d', $isNow)->isoFormat('dddd');
                    if ($isNow == $hoy) {
                        break;
                    } else if (in_array($weekens, ['domingo', 'sábado']) && $hoy != $start_date) {
                        $weekendArrays .= ($weekendArrays != '') ? '/' . $isNow : $isNow;
                    } else {

                        $uninspectedArrays .= ($uninspectedArrays != '') ? '/' . $isNow : $isNow;
                    }

                    $isNow = Carbon::parse($isNow)->addDay()->format('Y-m-d');
                }

                // dd($uninspectedArrays);
            }

            if ($observing && $request->observations == '') {
                return redirect()->route('processes.inspection-form')->with('success', 'obs');
            }

            if ($observing && $request->observations != '') {
                $observation .= 'OBS:' . $hoy . '  ' . $request->observations;
            }
            
            DB::table('vehicle_inspection')->insert([
                'id_vehicle' => $request->vehicle,
                'dates_start' => $start_date,
                'dates_end' => $hoy,
                'uninspected' => $uninspectedArrays,
                'responsible' => $request->responsible,
                'mileage_start' => $request->Mileage,
                'mileage_end' => $request->Mileage,
                'array_dates' => $datesArray,
                'array_inspection' => $inspectionArray,
                'weekend_array' => $weekendArrays,
                'observations' => $observation,
            ]);
        }


        // $car = DB::table('vehicles')->where('id', $request->vehicle)->value('plate_vehicle');

        // $textglobal = 'inspección de la placa ' . $car . ' realizada';

        return redirect()->route('processes.inspection-form')->with('success', 'ok');
    }

    public function pdf($plate, $dates)
    // $id )
    {
        date_default_timezone_set("America/Bogota"); //Zona horaria de Colombia 


        $date1 = DB::table('vehicle_inspection')->where('id_vehicle', $plate)->where('dates_start', $dates)->limit(1)->value('dates_start');

        if ($date1 > 0) {
            $fechaCarbon = Carbon::createFromFormat('Y-m-d', $date1);
            $hoy = $fechaCarbon;
        } else {
            $fechaCarbon = Carbon::createFromFormat('Y-m-d', $dates);
            $hoy = $fechaCarbon;
        }

        // dd($hoy);

        $nowyear = $hoy->year;
        $nowmonth = $hoy->month;

        $mes = strtoupper($hoy->monthName);

        $numdays = cal_days_in_month(CAL_GREGORIAN, $nowmonth, $nowyear);

        // $this->start_date =  $nowyear.'-'.$nowmonth.'-01'; // 1975-05-21 22:00:00
        $start_date =  $nowyear . '-' . $nowmonth . '-01'; // 1975-05-21 22:00:00
        // Convertir la cadena de fecha a un objeto Carbon
        $fechaCarbon = Carbon::createFromFormat('Y-m-d', $start_date);
        // Formatear la fecha sin horas, minutos y segundos
        $start_date = $fechaCarbon->format('Y-m-d');

        $dayName = $fechaCarbon->isoFormat('dddd');

        // dd($dayName);

        switch ($dayName) {
            case 'lunes':
                $dayStart = 0;
                break;
            case 'martes':
                $dayStart = 1;
                break;
            case 'miércoles':
                $dayStart = 2;
                break;
            case 'jueves':
                $dayStart = 3;
                break;
            case 'viernes':
                $dayStart = 4;
                break;
            case 'sábado':
                $dayStart = 5;
                break;
            case 'domingo':
                $dayStart = 6;
                break;
        }

        $end_date =   $nowyear . '-' . $nowmonth . '-' . $numdays; // 1975-05-21 22:00:00
        // Convertir la cadena de fecha a un objeto Carbon
        $fechaCarbon = Carbon::createFromFormat('Y-m-d', $end_date);
        // Formatear la fecha sin horas, minutos y segundos
        $end_date = $fechaCarbon->format('Y-m-d');

        $inspectionsCategory = inspectionCategory::pluck('name_description', 'id');
        $inspections = inspection::select('id', 'name_description', 'category')->get();

        $inspectionSelected =
            DB::table('vehicle_inspection')
            ->where('id_vehicle', $plate)
            ->whereBetween('dates_start', [$start_date, $end_date])->get();

            $arrayDates = DB::table('vehicle_inspection')
                ->where('id_vehicle', $plate)
                ->whereBetween('dates_start', [$start_date, $end_date])->value('array_dates');

            $endDates = DB::table('vehicle_inspection')
                ->where('id_vehicle', $plate)
                ->whereBetween('dates_start', [$start_date, $end_date])->value('dates_end');

                $arrayInspection = DB::table('vehicle_inspection')
                ->where('id_vehicle', $plate)
                ->whereBetween('dates_start', [$start_date, $end_date])->value('array_inspection');

            $uninspected = DB::table('vehicle_inspection')
                ->where('id_vehicle', $plate)
                ->whereBetween('dates_start', [$start_date, $end_date])->value('uninspected');

                $observation = DB::table('vehicle_inspection')
                ->where('id_vehicle', $plate)
                ->whereBetween('dates_start', [$start_date, $end_date])->value('observations');

                $weekendArray = DB::table('vehicle_inspection')
                ->where('id_vehicle', $plate)
                ->whereBetween('dates_start', [$start_date, $end_date])->value('weekend_array');

                if ($arrayDates != '' || $arrayDates == NULL) {
                    $datesArrays = Str::of($arrayDates)->explode('/')->toArray();
                    $inspectionArrays = Str::of($arrayInspection)->explode('/')->toArray();
                    $comments = Str::of($observation)->explode('/')->toArray();
                    $weekendArrays = Str::of($weekendArray)->explode('/')->toArray();
                    // $this->datesArray = 0;
                    // dd($datesArrays, $inspectionArrays, $uninspectedArrays);
                }
    
                if ($uninspected != '' || $uninspected == NULL) {
                    $uninspectedArrays = Str::of($uninspected)->explode('/')->toArray();
                }

        $dateVehicles = vehicle::where('id', $plate)->get();

        $kilometrajeInicial = DB::table('vehicle_inspection')->where('id_vehicle', $plate)->where('dates_start', $start_date)->value('mileage_start');

        $kilometrajeFinal = DB::table('vehicle_inspection')->where('id_vehicle', $plate)->where('dates_start', $start_date)->value('mileage_end');

        $responsibles = User::select('id', DB::raw('CONCAT(firstname, " ", secondname, " ", lastname, " ", motherslastname) As drive'))->get();

        $drives = driver::select('license_expiration', 'user_id')->get();;


        $pdf = PDF::loadView('pdfs.pdf-inspection', [
            'nowyear' => $nowyear,
            'mes' => $mes,
            'inspectionsCategory' => $inspectionsCategory,
            'inspections' => $inspections,
            'dayStart' => $dayStart,
            'numdays' => $numdays,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'inspectionSelected' => $inspectionSelected,
            'dateVehicles' => $dateVehicles,
            'kilometrajeInicial' => $kilometrajeInicial,
            'kilometrajeFinal' => $kilometrajeFinal,
            'responsibles' => $responsibles,
            'drives' => $drives,
            'datesArrays' => $datesArrays,
            'inspectionArrays' => $inspectionArrays,
            'uninspectedArrays' => $uninspectedArrays,
            'comments' => $comments,
            'endDates' => $endDates,
            'weekendArrays' => $weekendArrays,


        ]);
        // $pdf->loadHTML('<h1>Test</h1>');
        // $pdf->setpaper(array(0, 0, 216, 279), 'portrait');
        return $pdf->stream();

        // return view('pdfs.pdf-contracts');
    }
}

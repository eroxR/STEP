<?php

namespace App\Http\Livewire\List;

use App\Models\brakeTypes;
use App\Models\dimensionRims;
use App\Models\driver;
use App\Models\inspection;
use App\Models\inspectionCategory;
use App\Models\User;
use App\Models\vehicle;
use App\Models\vehicleClass;
use App\Models\vehicleType;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ListVehicles extends Component
{
    use WithFileUploads;

    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0, $numday = 0, $numdays, $bandera, $validate, $start_date, $end_date, $dayStart, $mes, $fechaActual, $showChange = 1, $other = 1;
    public $vehicle, $plate, $paramText, $dateDocument, $fileDocument, $operationDocument, $extension, $name, $Route, $Lists = null, $title, $amount, $idbeneficiary;
    public $responsible, $mileage, $fInicial, $fFinal, $observations, $vehicle_id, $montPdf, $yearNow, $toDatesArray, $toInspectionArray, $toUninspectedArrays = [], $toObservation = false, $toWeekendArray, $uninspected, $weekend,
        $answer1, $answer2, $answer3, $answer4, $answer5, $answer6, $answer7, $answer8, $answer9, $answer10, $answer11, $answer12, $answer13, $answer14,
        $answer15, $answer16, $answer17, $answer18, $answer19, $answer20, $answer21, $answer22, $answer23, $answer24, $answer25, $answer26, $answer27, $answer28, $answer29, $answer30, $answer31, $answer32,
        $answer33, $answer34, $answer35, $answer36, $answer37, $answer38, $answer39, $answer40, $answer41, $answer42, $answer43;
    public $certificate = [
            'Tarjeta_de_propiedad_Placa_', 'Certificado_SOAT_Placa_', 'Certificado_TécnicoMecánica_Placa_', 'Certificado_Tarjeta_de_Operación_Placa_',
            'Certificado_Preventiva_Placa_', 'Certificado_Extracontractual_Placa_', 'Certificado_civil_contractual_Placa_'
        ],
        $colum = [
            'property_card_number', 'secure_end_date', 'technomechanical_end_date', 'expiration_card_operation', 'expiration_preventive',
            'certificate_extracontractual', 'civil_contractual'

        ],
        $columname = [
            'Tarjeta de Propiedad', 'Seguro Obligatorio SOAT', 'Técnico Mecánica', 'Tarjeta de Operación', 'Preventiva', 'Extracontractual', 'Civil Contractual'

        ],
        $ownerType = ['EXTERNO', 'INTERNO'],
        $state = ['Inhabilitado', 'Habilitado', 'Inactivo', 'Pendiente'],
        $suspension = ['Suspensión McPherson', 'Suspensión de doble horquilla', 'Suspensión de eje rígido'],
        $typeDirection = ['mecánica', 'hidráulica', 'eléctrica'],
        $miniday = ['lun', 'mar', 'mie', 'jue', 'vie', 'sab', 'dom'],
        $getStateClasses = [
            "text-red-700 bg-red-100 dark:text-red-100 dark:bg-red-700",
            "text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100",
            "text-gray-700 bg-gray-100 dark:text-gray-100 dark:bg-gray-700"
        ];

    protected $listeners = ['Historicos', 'expiration', 'check'];

    public function mount()
    {
        $this->actualizarMes();
    }

    public function check($cant, $option, $start)
    {

        $newValue = $option == 'si' ? '2' : '1';

        for ($i = $start; $i <= $cant; $i++) {
            $this->{"answer$i"} = $newValue;
        }
    }

    public function actualizarMes()
    {

        date_default_timezone_set("America/Bogota"); //Zona horaria de Colombia 

        $hoy = Carbon::now();

        // $this->fechaActual = $hoy;
        // dd($hoy);
        // $this->montPdf = $hoy->format('Y-m-d');
        $this->yearNow = $nowyear = $hoy->year;
        $nowmonth = $hoy->month;

        $this->mes = strtoupper($hoy->monthName);

        $this->numdays = cal_days_in_month(CAL_GREGORIAN, $nowmonth, $nowyear);

        // Convertir la cadena de fecha a un objeto Carbon
        // Formatear la fecha sin horas, minutos y segundos
        $this->start_date = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-01')->format('Y-m-d');

        $this->montPdf = $this->start_date;

        $dayName = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-01')->isoFormat('dddd');

        // dd($dayName);

        $dayMap = [
            'lunes' => 0,
            'martes' => 1,
            'miércoles' => 2,
            'jueves' => 3,
            'viernes' => 4,
            'sábado' => 5,
            'domingo' => 6,
        ];

        $this->dayStart = $dayMap[$dayName];

        // Convertir la cadena de fecha a un objeto Carbon
        // Formatear la fecha sin horas, minutos y segundos
        $this->end_date = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-' . $this->numdays)->format('Y-m-d');
    }


    public function render()
    {

        $hoy = Carbon::now();

        // $nowyear = $hoy->year;
        // $nowmonth = $hoy->month;

        // dd($número);

        // dd($mes);
        $vehicles = DB::table('vehicles')
            ->where('plate_vehicle', 'like', '%' . $this->search . '%')
            ->where('state_vehicle', '!=' ,3)
            ->orderBy('vehicles.id', $this->direction)
            ->get();
        $listDrivers = driver::all();

        $this->ide != (0) ? $vehiclesSelected = DB::table('vehicles')
            ->where('vehicles.id', $this->ide)->where('state_vehicle', '!=' ,3)->get()
            : $vehiclesSelected = DB::table('vehicles')
            ->orderBy('vehicles.id', 'desc')
            ->limit(1)->get();



        $idVehicle = DB::table('vehicles')->orderBy('vehicles.id', 'desc')->limit(1)->value('id');


        // $this->ide != (0) ? $inspectionSelected = DB::table('vehicle_inspection')
        //     ->where('id_vehicle', $this->ide)
        //     ->whereBetween('dates', [$this->start_date, $this->end_date])->remember(120)->get()
        //     : $inspectionSelected =
        //     DB::table('vehicle_inspection')
        //     ->where('id_vehicle', $idVehicle)
        //     ->whereBetween('dates', [$this->start_date, $this->end_date])->remember(120)->get();

        $this->ide != (0) ? $inspectionSelected = cache()->remember('inspection_query_' . $this->ide, 120, function () {
            return DB::table('vehicle_inspection')
                ->where('id_vehicle', $this->ide)
                ->whereBetween('dates_start', [$this->start_date, $this->end_date])->get();
        })
            : $inspectionSelected = cache()->remember('inspection_query_' . $idVehicle, 120, function () use ($idVehicle) {
                return DB::table('vehicle_inspection')
                    ->where('id_vehicle', $idVehicle)
                    ->whereBetween('dates_start', [$this->start_date, $this->end_date])->get();
            });

        $this->ide != (0) ? $arrayDates = DB::table('vehicle_inspection')
            ->where('id_vehicle', $this->ide)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('array_dates')

            : $arrayDates = DB::table('vehicle_inspection')
            ->where('id_vehicle', $idVehicle)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('array_dates');

        $this->ide != (0) ? $arrayInspection = DB::table('vehicle_inspection')
            ->where('id_vehicle', $this->ide)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('array_inspection')

            : $arrayInspection = DB::table('vehicle_inspection')
            ->where('id_vehicle', $idVehicle)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('array_inspection');

        $this->ide != (0) ? $endDates = DB::table('vehicle_inspection')
            ->where('id_vehicle', $this->ide)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('dates_end')

            : $endDates = DB::table('vehicle_inspection')
            ->where('id_vehicle', $idVehicle)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('dates_end');

        $this->ide != (0) ? $uninspected = DB::table('vehicle_inspection')
            ->where('id_vehicle', $this->ide)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('uninspected')

            : $uninspected = DB::table('vehicle_inspection')
            ->where('id_vehicle', $idVehicle)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('uninspected');

        $this->ide != 0 ?
            $observation = DB::table('vehicle_inspection')
            ->where('id_vehicle', $this->ide)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('observations')
            // $observation = '1ertyterweqwefrwhytjuyutyrterwteyrutyt/rwterhyjtuyrtrefrgthyjutytrerwy/arteyrutryetgrwfwegthyryetreregtrhyjut/ngcfxcgvhbjnjhgvcfdxcfgvbhjbvcfxdcfgv'

            :
            $observation = DB::table('vehicle_inspection')
            ->where('id_vehicle', $idVehicle)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('observations');

            // $observation = '2ertyterweqwefrwhytjuyutyrterwteyrutyt/rwterhyjtuyrtrefrgthyjutytrerwy/arteyrutryetgrwfwegthyryetreregtrhyjut/ngcfxcgvhbjnjhgvcfdxcfgvbhjbvcfxdcfgv'
        ;

        $this->ide != 0 ?
            $arrayWeekend = DB::table('vehicle_inspection')
            ->where('id_vehicle', $this->ide)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('weekend_array')
            // $observation = '1ertyterweqwefrwhytjuyutyrterwteyrutyt/rwterhyjtuyrtrefrgthyjutytrerwy/arteyrutryetgrwfwegthyryetreregtrhyjut/ngcfxcgvhbjnjhgvcfdxcfgvbhjbvcfxdcfgv'

            :
            $arrayWeekend = DB::table('vehicle_inspection')
            ->where('id_vehicle', $idVehicle)
            ->whereBetween('dates_start', [$this->start_date, $this->end_date])->value('weekend_array');

            // $observation = '2ertyterweqwefrwhytjuyutyrterwteyrutyt/rwterhyjtuyrtrefrgthyjutytrerwy/arteyrutryetgrwfwegthyryetreregtrhyjut/ngcfxcgvhbjnjhgvcfdxcfgvbhjbvcfxdcfgv'
        ;


        if ($arrayDates != '' || $arrayDates == NULL) {
            $datesArrays = Str::of($arrayDates)->explode('/')->toArray();
            $inspectionArrays = Str::of($arrayInspection)->explode('/')->toArray();
            $comments = Str::of($observation)->explode('/')->toArray();
            $WeekendArrays = Str::of($arrayWeekend)->explode('/')->toArray();
            // $this->datesArray = 0;
            // dd($datesArrays, $inspectionArrays, $uninspectedArrays);
        }




        if ($uninspected != '' || $uninspected == NULL) {
            $uninspectedArrays = Str::of($uninspected)->explode('/')->toArray();
        }

        // $identifitations = identification::pluck('description_identification', 'id');


        $linked = User::select('id', 'firstname', 'secondname', 'lastname', 'motherslastname')->get();
        $drives = User::select('id', 'firstname', 'secondname', 'lastname', 'motherslastname')
            ->where('charge', 5)->get();
        $vehicle_types = vehicleType::pluck('vehicle_type_name', 'id');
        $inspectionsCategory = inspectionCategory::pluck('name_description', 'id');
        $inspections = inspection::select('id', 'name_description', 'category')->get();
        $vehicle_classes = vehicleClass::pluck('vehicle_class_description', 'id');
        $braketypes = brakeTypes::pluck('brake_Type_Description', 'id');
        $dimensionRims = dimensionRims::select('id', 'inch', 'type_rims')->get();

        $totals = vehicle::count();
        $inhabilitado = vehicle::where('state_vehicle', 1)->count('id');
        $habilitado = vehicle::where('state_vehicle', 2)->count('id');
        $inactivo = vehicle::where('state_vehicle', 3)->count('id');



        return view('livewire.list.list-vehicles', compact(
            'vehicles',
            'listDrivers',
            'vehiclesSelected',
            'drives',
            'linked',
            'vehicle_types',
            'vehicle_classes',
            'dimensionRims',
            'braketypes',
            'hoy',
            'totals',
            'inhabilitado',
            'habilitado',
            'inactivo',
            'inspectionsCategory',
            'inspections',
            'inspectionSelected',
            'uninspectedArrays',
            'inspectionArrays',
            'datesArrays',
            'endDates',
            'comments',
            'WeekendArrays'

        ));
    }



    public function Historicos($id, $document)
    {
        $id = $id[0];
        $document = $document[0];

        $this->Lists = DB::table('documents')
            ->where('documentable_id', $id)
            ->where('document_name', 'like', '%' . $this->certificate[$document] . '%')
            ->orderBy('id', 'desc')->get();

        $this->title = $this->columname[$document];
        $this->amount = $this->Lists->count();
        // dd($this->Lists);
        $this->emit('openModalHistorico');
    }

    public function updateDocumentation()
    {


        if (is_null($this->dateDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }

        if (is_null($this->fileDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }

        if ($this->paramText == 3) {
            if (is_null($this->operationDocument)) {
                return $this->emit('newDocument', ['exit' => 5]);
            }
        }

        $hoy = Carbon::now()->format('Y-m-d');

        if ($this->dateDocument <= $hoy) {
            return $this->emit('newDocument', ['exit' => 2]);
        }

        if ($this->paramText == 3) {
            $operationCard = vehicle::where('id', $this->vehicle)->value('card_operation');
            // dd( $operationCard);
            if ($this->operationDocument == $operationCard) {
                return $this->emit('newDocument', ['exit' => 5]);
            }
        }

        // validar que la fecha no sea anterior, y realizar la subida del archivo
        $newState = vehicle::where('id', $this->vehicle)->value($this->colum[$this->paramText]);
        if ($this->dateDocument <= $newState) {
            return $this->emit('newDocument', ['exit' => 3]);
        }
        if ($this->paramText == 0) {
            DB::table('vehicles')->where('id', $this->vehicle)->update([$this->colum[$this->paramText] => $this->operationDocument]);
        } else {
            DB::table('vehicles')->where('id', $this->vehicle)->update([$this->colum[$this->paramText] => $this->dateDocument]);
        }
        
        

        if ($this->paramText == 3) {
            DB::table('vehicles')->where('id', $this->vehicle)->update(['card_operation' => $this->operationDocument]);
        }

        if ($this->paramText == 0) {
            $this->dateDocument = $this->operationDocument;
        }

        $this->extension = $this->fileDocument->extension();
        $this->name = $this->certificate[$this->paramText] . $this->plate . '_' . $this->dateDocument . '.' . $this->extension;
        $url = $this->fileDocument->storeAs('public/STEP/vehicles/Placa_' . $this->plate, $this->name);
        $this->Route = Storage::url($url);

        DB::table('documents')->insert([
            'documentable_id' => $this->vehicle,
            'document_name' => $this->name,
            'extension' => $this->extension,
            'directory' => $this->Route,
            'documentable_Type' => 'App\Models\vehicle',
        ]);

        $newState = 100;

        // Recorrer el array certificate
        foreach ($this->certificate as $index => $certificate) {
            if ($index >= 1 && $index <= 6) {
                $newState = vehicle::where('id', $this->vehicle)
                    ->value($this->colum[$index]);

                if ($newState < $hoy) {
                    break;
                }
            }
        }

        $state = ($newState < $hoy) ? 100 : 99;

        vehicle::where('id', $this->vehicle)->update(['state_vehicle' => ($state == 99) ? '2' : '1']);

        $exit = 1;
        // dd($this->fileDocument, $this->dateDocument);
        $this->emit('newDocument', ['exit' => $exit]);

        $this->clear();
    }

    public function order()
    {

        if ($this->direction == 'asc') {
            $this->direction = 'desc';
        } else {
            $this->direction = 'asc';
        }
    }

    public function expiration()
    {
        $this->emit('warning');
    }

    // limpiar los componentes que se utilizaron para crear un vehiculo
    public function clear()
    {
        $this->reset([
            'dateDocument',
            'fileDocument',
            'operationDocument',
            'answer1',
            'answer2',
            'answer3',
            'answer4',
            'answer5',
            'answer6',
            'answer7',
            'answer8',
            'answer9',
            'answer10',
            'answer11',
            'answer12',
            'answer13',
            'answer14',
            'answer15',
            'answer16',
            'answer17',
            'answer18',
            'answer19',
            'answer20',
            'answer21',
            'answer22',
            'answer23',
            'answer24',
            'answer25',
            'answer26',
            'answer27',
            'answer28',
            'answer29',
            'answer30',
            'answer31',
            'answer32',
            'answer33',
            'answer34',
            'answer35',
            'answer36',
            'answer37',
            'answer38',
            'answer39',
            'answer40',
            'answer41',
            'answer42',
            'answer43',
            'responsible',
            'mileage',
            'fInicial',
            'fFinal',
            'observations',
            'vehicle_id',
        ]);
    }

    public function changeMonth($changingMonth)
    {
        date_default_timezone_set("America/Bogota"); //Zona horaria de Colombia 


        // $this->other = 0;
        // dd($changingMonth, $this->other);
        if ($changingMonth == 1) {

            $hoy = Carbon::now();
            $mesAnterior = $hoy->subMonth()->monthName;
            $this->mes = strtoupper($mesAnterior);
            $this->fechaActual = $hoy;

            $this->yearNow = $nowyear = $hoy->year;
            $nowmonth = $hoy->month;
            // $this->start_date =  $nowyear.'-'.$nowmonth.'-01'; // 1975-05-21 22:00:00
            $this->start_date =  $nowyear . '-' . $nowmonth . '-01'; // 1975-05-21 22:00:00
            // Convertir la cadena de fecha a un objeto Carbon
            $fechaCarbon = Carbon::createFromFormat('Y-m-d', $this->start_date);
            // Formatear la fecha sin horas, minutos y segundos
            $this->start_date = $fechaCarbon->format('Y-m-d');

            $this->montPdf = $this->start_date;
            // $this->montPdf = $hoy->format('Y-m-d');
            $this->updatingMonth($hoy);
            $this->emit('ver', ['variablis' => $this->other]);

            $this->other = 0;
            // dd('si',$this->showChange);

        } else {

            $mesSiguiente = $this->fechaActual->addMonths()->monthName;
            $this->mes = strtoupper($mesSiguiente);

            $this->yearNow = $nowyear = $this->fechaActual->year;
            $nowmonth = $this->fechaActual->month;
            // $this->start_date =  $nowyear.'-'.$nowmonth.'-01'; // 1975-05-21 22:00:00
            $this->start_date =  $nowyear . '-' . $nowmonth . '-01'; // 1975-05-21 22:00:00
            // Convertir la cadena de fecha a un objeto Carbon
            $fechaCarbon = Carbon::createFromFormat('Y-m-d', $this->start_date);
            // Formatear la fecha sin horas, minutos y segundos
            $this->start_date = $fechaCarbon->format('Y-m-d');

            $this->montPdf = $this->start_date;

            // $this->montPdf = $this->fechaActual->format('Y-m-d');
            $this->updatingMonth($this->fechaActual);
            // $this->emit('month', ['change' => 2]);
            // $this->emit('ver', ['variablis' => $this->other]);

            $this->other = 1;
            // dd('no',$this->showChange);
        }
    }

    public function updatingMonth($hoy)
    {

        $nowyear = $hoy->year;
        $nowmonth = $hoy->month;

        $this->numdays = cal_days_in_month(CAL_GREGORIAN, $nowmonth, $nowyear);

        // Convertir la cadena de fecha a un objeto Carbon
        // Formatear la fecha sin horas, minutos y segundos
        $this->start_date = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-01')->format('Y-m-d');

        $dayName = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-01')->isoFormat('dddd');

        // dd($dayName);

        $dayMap = [
            'lunes' => 0,
            'martes' => 1,
            'miércoles' => 2,
            'jueves' => 3,
            'viernes' => 4,
            'sábado' => 5,
            'domingo' => 6,
        ];

        $this->dayStart = $dayMap[$dayName];

        // Convertir la cadena de fecha a un objeto Carbon
        // Formatear la fecha sin horas, minutos y segundos
        $this->end_date = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-' . $this->numdays)->format('Y-m-d');

        // dd($this->start_date, $this->end_date);
    }

    public function toInspect()
    {
        $hoy = Carbon::now();

        $endyear = $hoy->year;
        $endmonth = $hoy->month;

        $nowyear = Carbon::createFromFormat('Y-m-d', $this->fInicial)->year;
        $nowmonth = Carbon::createFromFormat('Y-m-d', $this->fInicial)->month;

        $numdays = cal_days_in_month(CAL_GREGORIAN, $endmonth, $endyear);

        $endNumdays = cal_days_in_month(CAL_GREGORIAN, $nowmonth, $nowyear);

        $startDate = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-01')->format('Y-m-d');

        $endDate =  Carbon::createFromFormat('Y-m-d', $endyear . '-' . $endmonth . '-' . $numdays)->format('Y-m-d');

        $fEndDate =  Carbon::createFromFormat('Y-m-d',  $nowyear . '-' . $nowmonth . '-' . $endNumdays)->format('Y-m-d');

        $startnow =  Carbon::createFromFormat('Y-m-d', $endyear . '-' . $endmonth . '-01')->format('Y-m-d');

        // dd($startDate,$endDate);
        // dd($endNumdays);

        // $dayName = Carbon::createFromFormat('Y-m-d', $nowyear . '-' . $nowmonth . '-07')->isoFormat('dddd');

        // // dd($dayName);
        // $dayMap = [
        //     'lunes' => 0,
        //     'martes' => 1,
        //     'miércoles' => 2,
        //     'jueves' => 3,
        //     'viernes' => 4,
        //     'sábado' => 5,
        //     'domingo' => 6,
        // ];

        // $this->dayStart = $dayMap[$dayName];

        // $this->emit('inspected', ['inspec' => 0]);

        $observation = '';
        $endDates = '';
        // $inspectionArray = '';
        $uninspectedArrays = '';

        // $nextDate = $this->fInicial;

        if ($this->fInicial > $endDate || $this->fFinal > $endDate) {
           return $this->emit('inspected', ['inspec' => 2]);
        }

        $existInspection = DB::table('vehicle_inspection')->where('id_vehicle', $this->vehicle_id)->where('dates_start', $startDate)->value('id');
        if (!empty($existInspection)) {
            $this->uninspected = DB::table('vehicle_inspection')->where('id', $existInspection)->value('uninspected');
            $this->weekend = DB::table('vehicle_inspection')->where('id', $existInspection)->value('weekend_array');
            $this->toInspectionArray = DB::table('vehicle_inspection')->where('id', $existInspection)->value('array_inspection');
            $this->toDatesArray = DB::table('vehicle_inspection')->where('id', $existInspection)->value('array_dates');
            $observation = DB::table('vehicle_inspection')->where('id', $existInspection)->value('observations');
            $endDates = DB::table('vehicle_inspection')->where('id', $existInspection)->value('dates_end');
            $nowMileage = DB::table('vehicle_inspection')->where('id', $existInspection)->value('mileage_end');
            if (!empty($this->uninspected)) {
                $this->toUninspectedArrays = Str::of($this->uninspected)->explode('/')->toArray();
                $this->toWeekendArray = Str::of($this->weekend)->explode('/')->toArray();
            }

            if ($this->mileage < $nowMileage) {
                return $this->emit('inspected', ['inspec' => 3]);
            }
        }


        if ($this->fFinal != '') {

            if ($this->fFinal > $fEndDate) {
                return $this->emit('inspected', ['inspec' => 4]);
            } else if ($this->fFinal < $this->fInicial) {
                return $this->emit('inspected', ['inspec' => 5]);
            }

            // dd($this->uninspected);
            if ($observation != '' || $this->observations != '') {
                $observation .= ($observation != '') ? '/' . 'OBS:' . $this->fFinal . '  ' . $this->observations : 'OBS:' . $this->fFinal . '  ' . $this->observations;
            }

            if (!empty($this->uninspected)) {

                //opción 1
                $this->toArrays($this->fInicial, $endDates, false, true, $this->fFinal);

                if ($this->toObservation && empty($this->observations)) {
                    return $this->emit('inspected', ['inspec' => 6]);
                }

                $this->uninspected = '';

                DB::table('vehicle_inspection')->where('id', $existInspection)->update([
                    // 'id_vehicle' => $existInspection,
                    // 'dates_start' => ,
                    'dates_end' => $this->fFinal,
                    'uninspected' => $this->uninspected,
                    'responsible' => $this->responsible,
                    // 'mileage_start' => ,
                    'mileage_end' => $this->mileage,
                    'array_dates' => $this->toDatesArray,
                    'array_inspection' => $this->toInspectionArray,
                    'weekend_array' => $this->weekend,
                    'observations' => $observation,

                ]);
            } else {


                // if ($startDate == $endDates || $this->toUninspectedArrays == NULL) {
                if ($endDates != '') {

                    //opción 2
                    $this->toArrays($this->fInicial, $endDates, false, false, $this->fFinal);

                    if ($this->toObservation && empty($this->observations)) {
                        return $this->emit('inspected', ['inspec' => 6]);
                    }

                    DB::table('vehicle_inspection')->where('id', $existInspection)->update([
                        // 'id_vehicle' => $existInspection,
                        // 'dates_start' => ,
                        'dates_end' => $this->fFinal,
                        // 'uninspected' => $newUninspectedArrays,
                        'responsible' => $this->responsible,
                        // 'mileage_start' => ,
                        'mileage_end' => $this->mileage,
                        'array_dates' => $this->toDatesArray,
                        'array_inspection' => $this->toInspectionArray,
                        'weekend_array' => $this->weekend,
                        'observations' => $observation,

                    ]);
                } else {
                    // dd('entro');
                    //opción 3
                    $this->toArrays($this->fInicial, $this->fInicial, true, false, $this->fFinal);

                    if ($this->toObservation && empty($this->observations)) {
                        return $this->emit('inspected', ['inspec' => 6]);
                    }

                    DB::table('vehicle_inspection')->insert([
                        'id_vehicle' => $this->vehicle_id,
                        'dates_start' => $this->fInicial,
                        'dates_end' =>  $this->fFinal,
                        'uninspected' => $this->uninspected,
                        'responsible' => $this->responsible,
                        'mileage_start' => $this->mileage,
                        'mileage_end' => $this->mileage,
                        'array_dates' => $this->toDatesArray,
                        'array_inspection' => $this->toInspectionArray,
                        'weekend_array' => $this->weekend,
                        'observations' => $observation,
                    ]);
                }
            }
        } else {

            if ($this->fInicial <= $endDates) {
                // dd($alreadyInspected);
                return $this->emit('inspected', ['inspec' => 1]);
            }

            if ($observation != '' || $this->observations != '') {
                $observation .= ($observation != '') ? '/' . 'OBS:' . $this->fInicial . '  ' . $this->observations : 'OBS:' . $this->fInicial . '  ' . $this->observations;
            }

            //$this->fFinal = $this->fInicial;

            if (!empty($endDates)) {

                // dd($observation);

                $this->toArrays($this->fInicial, $endDates, true, false, $this->fInicial);

                if ($this->toObservation && empty($this->observations)) {
                    return $this->emit('inspected', ['inspec' => 6]);
                }

                DB::table('vehicle_inspection')->where('id', $existInspection)->update([
                    // 'id_vehicle' => $existInspection,
                    // 'dates_start' => ,
                    'dates_end' => $this->fInicial,
                    'uninspected' => $this->uninspected,
                    'responsible' => $this->responsible,
                    // 'mileage_start' => ,
                    'mileage_end' => $this->mileage,
                    'array_dates' => $this->toDatesArray,
                    'array_inspection' => $this->toInspectionArray,
                    'weekend_array' => $this->weekend,
                    'observations' => $observation,

                ]);
            } else {

                // dd($this->fInicial);
                $this->toArrays($this->fInicial, $this->fInicial, true, false, $this->fInicial);

                if ($this->toObservation && empty($this->observations)) {
                    return $this->emit('inspected', ['inspec' => 6]);
                }

                DB::table('vehicle_inspection')->insert([
                    'id_vehicle' => $this->vehicle_id,
                    'dates_start' => $this->fInicial,
                    'dates_end' =>  $this->fInicial,
                    'uninspected' => $this->uninspected,
                    'responsible' => $this->responsible,
                    'mileage_start' => $this->mileage,
                    'mileage_end' => $this->mileage,
                    'array_dates' => $this->toDatesArray,
                    'array_inspection' => $this->toInspectionArray,
                    'weekend_array' => $this->weekend,
                    'observations' => $observation,
                ]);
            }
        }

        $this->clear();
        $this->emit('inspected', ['inspec' => 0]);

        // $this->emit('inspected');
    }
    // $this->toArrays($this->fInicial,$endDates,false,$uninspectedArrays,0);
    function toArrays($nextDate, $endDates, $toUninspected, $data, $ffinal)
    {

        $options = [
            $this->answer1, $this->answer2, $this->answer3, $this->answer4, $this->answer5, $this->answer6, $this->answer7, $this->answer8, $this->answer9, $this->answer10, $this->answer11,
            $this->answer12, $this->answer13, $this->answer14, $this->answer15, $this->answer16, $this->answer17, $this->answer18, $this->answer19, $this->answer20, $this->answer21, $this->answer22,
            $this->answer23, $this->answer24, $this->answer25, $this->answer26, $this->answer27, $this->answer28, $this->answer29, $this->answer30, $this->answer31, $this->answer32, $this->answer33,
            $this->answer34, $this->answer35, $this->answer36, $this->answer37, $this->answer38, $this->answer39, $this->answer40, $this->answer41, $this->answer42, $this->answer43
        ];


        foreach ($options as $key => $value) {
            if (empty($value)) {
                return $this->emit('inspected', ['inspec' => 7]);
            }
        }

        do {
            // dd($this->toUninspectedArrays);

            $dayName = Carbon::createFromFormat('Y-m-d', $nextDate)->isoFormat('dddd');
            if ($data) {
                // $this->emit('pruebas', ['datos' => $nextDate], ['datos1' => $endDates], ['datos3' => $nextDate < $endDates && !in_array($nextDate, $this->toUninspectedArrays)]);
                if ($nextDate <= $endDates && !in_array($nextDate, $this->toUninspectedArrays)) {
                } else {
                    for ($i = 0; $i < count($options); $i++) {
                        if (in_array($dayName, ['domingo', 'sábado']) and $this->fFinal != '') {
                            $this->weekend .= ($this->weekend != '') ? '/' . $nextDate : $nextDate;
                            break;
                        }
                        if ($options[$i] == 1) {

                            $this->toDatesArray .= ($this->toDatesArray != '') ? '/' . $nextDate : $nextDate;
                            $this->toInspectionArray .= ($this->toInspectionArray != '') ? '/' . $i + 1 : $i + 1;
                            $this->toObservation = true;
                        }
                    }
                }
            } else {

                for ($i = 0; $i < count($options); $i++) {
                    if (in_array($dayName, ['domingo', 'sábado']) and $this->fFinal != '') {
                        $this->weekend .= ($this->weekend != '') ? '/' . $nextDate : $nextDate;
                        break;
                    }
                    if ($options[$i] == 1) {

                        $this->toDatesArray .= ($this->toDatesArray != '') ? '/' . $nextDate : $nextDate;
                        $this->toInspectionArray .= ($this->toInspectionArray != '') ? '/' . $i + 1 : $i + 1;
                        $this->toObservation = true;
                    }
                }
            }

            $nextDate = Carbon::parse($nextDate)->addDay()->format('Y-m-d');
        } while ($nextDate <= $ffinal);

        if ($toUninspected) {
            $fecha1 = new DateTime($this->fInicial);
            $fecha2 = new DateTime($endDates);
            $intervalo = $fecha2->diff($fecha1);
            $diferencia = $intervalo->days;
            $isNow = $endDates;


            for ($i = 0; $i < $diferencia; $i++) {
                $dayName = Carbon::createFromFormat('Y-m-d', $isNow)->isoFormat('dddd');
                if ($isNow == $this->fInicial) {
                    break;
                } else if (in_array($dayName, ['domingo', 'sábado'])) {
                    if ($isNow > $endDates) {
                        $this->weekend .= ($this->weekend != '') ? '/' . $isNow : $isNow;
                    }
                } else {
                    if ($isNow == $endDates) {
                        # code...
                    } else {
                        $this->uninspected .= ($this->uninspected != '') ? '/' . $isNow : $isNow;
                    }
                }

                $isNow = Carbon::parse($isNow)->addDay()->format('Y-m-d');
            }
        }
    }
}

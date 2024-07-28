<?php

namespace App\Http\Livewire;

use App\Models\driver;
use App\Models\User;
use App\Models\vehicle;
use Illuminate\Support\Arr;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Settings extends Component
{

    public $counter = 1;
    public $open = false;
    public $colum = [
            'license_expiration', 'certificate_drugs_alchoolemia', 'SIMIT_queries', 'psicosensometrico', 'Rules_Transit', 'Defensive_driving', 'First_aid', 'Road_safety',
            'date_eps', 'date_pension', 'date_layoffs', 'arl_date', 'date_compensationbox'

        ],
        $vehicleColum = [
            'secure_end_date', 'technomechanical_end_date', 'expiration_card_operation', 'expiration_preventive', 'certificate_extracontractual', 'civil_contractual'
        ],
        $columname = [
            'licencia de conducción', 'Drogas y alchoolemia', 'Consultas SIMIT', 'psicosensometrico', 'Normas de Transito', 'Manejo Defensivo', 'Primeros Auxilios',
            'Seguridad Vial', 'Eps', 'Pensión', 'Cesantias', 'Arl', 'Caja Compensacion'

        ],
        $vehicleColumname = [
            'Seguro Obligatorio SOAT', 'Técnico Mecánica', 'Tarjeta de Operación', 'Preventiva', 'Extracontractual', 'Civil Contractual'
        ],
        $listType = [
            'Documentos que en poco tiempo expiraran (menos de 2 meses)', 'Documentos cerca de vencerse (menos de 1 mes)', 'Documentos proximos a vencer (menos de 5 dias)', 'Documentos que expiran hoy', 'Documentos vencidos'
        ];
    public $listExpire = [], $shortTimeExpire = [], $nearExpire = [], $aboutExpire = [], $todayExpired = [], $expired = [], 
    $listExpireV = [], $shortTimeExpireV = [], $nearExpireV = [], $aboutExpireV = [], $todayExpiredV = [], $expiredV = [];

    // public function abrir(){
    //     $this->emitTo('contac-modal', 'show');
    // }

    // public function abrir(){
    //     $this->open = true;
    // }

    protected $listeners = ['searchExpired'];

    public function render()
    {


        return view('livewire.settings');
    }

    public function searchExpired()
    {

        date_default_timezone_set("America/Bogota"); //Zona horaria de Colombia

        // $aboutExpire = []; //proximos a vencer de 5 a 1
        // $nearExpire = []; //cerca de vencer de 30 a 5
        // $expired = []; //vencidos menor a today
        // $shortTimeExpire = []; //en poco tiempo expiraran de 60 a 30
        // $todayExpired = []; //hoy expiran
        $today = Carbon::today();

        $drivers = User::where('charge', 5)->whereIn('user_state', [2, 3])->get();

        $documents = [];
        $plus = [];

        $shortTimeExpireCount = 0;
        $nearExpireCount = 0;
        $aboutExpireCount = 0;
        $todayExpiredCount = 0;
        $expiredCount = 0;

        foreach ($drivers as $driver) {

            $expiredName = true;
            $todayExpiredName = true;
            $aboutExpireName = true;
            $nearExpireName = true;
            $shortTimeExpireName = true;

            $shortTimeExpireDoc = 1;
            $nearExpireDoc = 1;
            $aboutExpireDoc = 1;
            $todayExpiredDoc = 1;
            $expiredDoc = 1;


            for ($i = 0; $i < count($this->colum); $i++) {
                // dd($this->colum[0]);
                if ($i >= 8 && $i <= 12) {
                    $document = User::where('id', $driver->id)->value($this->colum[$i]);
                } else {
                    $document = driver::where('user_id', $driver->id)->value($this->colum[$i]);
                }

                // $document = Carbon::createFromDate($document);
                $document = Carbon::parse($document);

                $date = $document->diffInDays($today);

                if ($document != null) {
                    if ($document > $today) {

                        if ($date <= 60 && $date > 30) {
                            // dd('la respuesta es entre 60 y 30');

                            if ($shortTimeExpireName == true) {
                                $this->shortTimeExpire[$shortTimeExpireCount]['fullname'] = $driver->firstname . ' ' . $driver->secondname . ' ' . $driver->lastname . ' ' . $driver->motherslastname;
                                $this->shortTimeExpire[$shortTimeExpireCount]['documents'] = $documents;
                                $shortTimeExpireName = false;
                                array_push($plus, 1);
                            }
                        } elseif ($date <= 30 && $date > 5) {
                            // dd('la respuesta es entre 30 y 5');

                            if ($nearExpireName == true) {
                                $this->nearExpire[$nearExpireCount]['fullname'] = $driver->firstname . ' ' . $driver->lastname;
                                $this->nearExpire[$nearExpireCount]['documents'] = $documents;
                                $nearExpireName = false;
                                array_push($plus, 2);
                            }
                        } elseif ($date <= 5 && $date > 1) {
                            // dd('la respuesta es entre 5 y 1');

                            if ($aboutExpireName == true) {
                                $this->aboutExpire[$aboutExpireCount]['fullname'] = $driver->firstname . ' ' . $driver->lastname;
                                $this->aboutExpire[$aboutExpireCount]['documents'] = $documents;
                                $aboutExpireName = false;
                                array_push($plus, 3);
                            }
                        } else {
                            // dd('la respuesta es no hace nada por que no esta proxima a vencer');
                        }
                    } elseif ($document == $today) {
                        // dd('la respuesta es vence hoy');

                        if ($todayExpiredName == true) {
                            $this->todayExpired[$todayExpiredCount]['fullname'] = $driver->firstname . ' ' . $driver->lastname;
                            $this->todayExpired[$todayExpiredCount]['documents'] = $documents;
                            $todayExpiredName = false;
                            array_push($plus, 4);
                        }
                    } else {
                        // dd('la respuesta es vencida');

                        if ($expiredName == true) {
                            $this->expired[$expiredCount]['fullname'] = $driver->firstname . ' ' . $driver->lastname;
                            $this->expired[$expiredCount]['documents'] = $documents;
                            $expiredName = false;
                            array_push($plus, 5);
                            // 'dd($expired);'

                            DB::table('drivers')
                            ->where('user_id', $driver->id)
                            ->update(['driver_status' => '1']);
                        }
                    }
                } else {
                    // dd('la respuesta es sin informacion');
                }

                // dd($date);

                // $aboutExpire[$count]['fullname'] = $driver->firstname . ' ' . $driver->lastname;
                // $aboutExpire[$count]['licencia'] = $document;
                //     for ($j=0; $j < count($this->colum); $j++) { 
                //         $document = driver::where('user_id',$driver[$i])->valiue($this->colum[$j]);
                if ($document != null) {
                    if ($document > $today) {

                        if ($date <= 60 && $date > 30) {
                            // dd('la respuesta es entre 60 y 30');

                            // $shortTimeExpire[$shortTimeExpireCount]['documents']['document'.$shortTimeExpireDoc] = $this->columname[$i];
                            $this->shortTimeExpire[$shortTimeExpireCount]['documents'] += ['document' . $shortTimeExpireDoc => $this->columname[$i]];

                            // dd($shortTimeExpire,$document,$date);
                            // $shortTimeExpireCount++;
                            $shortTimeExpireDoc++;
                            # $shortTimeExpire
                        } elseif ($date <= 30 && $date > 5) {
                            // dd('la respuesta es entre 30 y 5');

                            // $nearExpire[$nearExpireCount]['documents']['document'.$nearExpireDoc] = $this->columname[$i];
                            $this->nearExpire[$nearExpireCount]['documents'] += ['document' . $nearExpireDoc => $this->columname[$i]];
                            // dd($nearExpire,$document,$date);
                            // $nearExpireCount++;
                            $nearExpireDoc++;
                        } elseif ($date <= 5 && $date > 1) {
                            // dd('la respuesta es entre 5 y 1');

                            // $aboutExpire[$aboutExpireCount]['documents']['document'.$aboutExpireDoc] = $this->columname[$i];
                            $this->aboutExpire[$aboutExpireCount]['documents'] += ['document' . $aboutExpireDoc => $this->columname[$i]];
                            // dd($aboutExpire,$document,$date);
                            // $aboutExpireCount++;
                            $aboutExpireDoc++;
                        } else {
                            // dd('la respuesta es no hace nada por que no esta proxima a vencer');
                        }
                    } elseif ($document == $today) {
                        // dd('la respuesta es vence hoy');
                        // $todayExpired[$todayExpiredCount]['documents']['document'.$todayExpiredDoc] = $this->columname[$i];
                        $this->todayExpired[$todayExpiredCount]['documents'] += ['document' . $todayExpiredDoc => $this->columname[$i]];
                        // dd($todayExpired,$document,$date);
                        // $todayExpiredCount++;
                        $todayExpiredDoc++;
                        # $todayExpired
                    } else {
                        // dd('la respuesta es vencida');
                        // $expired[$expiredCount]['documents']['document'.$expiredDoc] = $this->columname[$i];
                        $this->expired[$expiredCount]['documents'] += ['document' . $expiredDoc => $this->columname[$i]];
                        // dd($expired,$document,$date);
                        // $expiredCount++;
                        $expiredDoc++;
                        # $expired
                    }
                } else {
                    // dd('la respuesta es sin informacion');
                }

                //     }

            }

            // dd($plus,$shortTimeExpireCount);
            for ($i = 0; $i < count($plus); $i++) {
                switch ($plus[$i]) {
                    case '1':
                        $shortTimeExpireCount++;
                        break;
                    case '2':
                        $nearExpireCount++;
                        break;
                    case '3':
                        $aboutExpireCount++;
                        break;
                    case '4':
                        $todayExpiredCount++;
                        break;
                    case '5':
                        $expiredCount++;
                        break;
                }
            }
            $plus = [];
        };

        // $this->listExpire = [$this->shortTimeExpire, $this->nearExpire, $this->aboutExpire, $this->todayExpired, $this->expired];
        // dd('en poco tiempo expiraran ', $this->shortTimeExpire, 'cerca de vencer ', $this->nearExpire, 'proximos a vencer ', $this->aboutExpire, 'hoy expiran ', $this->todayExpired, 'vencidos ', $this->expired);

        // $this->emit('expired', ['shortTimeExpire' => $shortTimeExpire], ['nearExpire' => $nearExpire]);
        // $this->emit('expired', ['shortTimeExpire' => $shortTimeExpire], ['nearExpire' => $nearExpire]);

        // consulta del estado de la documentación de los vehiculos

        $vehicles = vehicle::whereIn('state_vehicle', [1, 2, 4])->get();

        $documents = [];
        $plus = [];

        $shortTimeExpireCount = 0;
        $nearExpireCount = 0;
        $aboutExpireCount = 0;
        $todayExpiredCount = 0;
        $expiredCount = 0;

        foreach ($vehicles as $vehicle) {

            $expiredName = true;
            $todayExpiredName = true;
            $aboutExpireName = true;
            $nearExpireName = true;
            $shortTimeExpireName = true;

            $shortTimeExpireDoc = 1;
            $nearExpireDoc = 1;
            $aboutExpireDoc = 1;
            $todayExpiredDoc = 1;
            $expiredDoc = 1;


            for ($i = 0; $i < count($this->vehicleColum); $i++) {

                $document = vehicle::where('id', $vehicle->id)->value($this->vehicleColum[$i]);

                // $document = Carbon::createFromDate($document);
                $document = Carbon::parse($document);

                $date = $document->diffInDays($today);

                if ($document != null) {
                    if ($document > $today) {

                        if ($date <= 60 && $date > 30) {
                            // dd('la respuesta es entre 60 y 30');

                            if ($shortTimeExpireName == true) {
                                $this->shortTimeExpireV[$shortTimeExpireCount]['placa'] = $vehicle->plate_vehicle;
                                $this->shortTimeExpireV[$shortTimeExpireCount]['documents'] = $documents;
                                $shortTimeExpireName = false;
                                array_push($plus, 1);
                            }
                        } elseif ($date <= 30 && $date > 5) {
                            // dd('la respuesta es entre 30 y 5');

                            if ($nearExpireName == true) {
                                $this->nearExpireV[$nearExpireCount]['placa'] = $vehicle->plate_vehicle;
                                $this->nearExpireV[$nearExpireCount]['documents'] = $documents;
                                $nearExpireName = false;
                                array_push($plus, 2);
                            }
                        } elseif ($date <= 5 && $date > 1) {
                            // dd('la respuesta es entre 5 y 1');

                            if ($aboutExpireName == true) {
                                $this->aboutExpireV[$aboutExpireCount]['placa'] = $vehicle->plate_vehicle;
                                $this->aboutExpireV[$aboutExpireCount]['documents'] = $documents;
                                $aboutExpireName = false;
                                array_push($plus, 3);
                            }
                        } else {
                            // dd('la respuesta es no hace nada por que no esta proxima a vencer');
                        }
                    } elseif ($document == $today) {
                        // dd('la respuesta es vence hoy');

                        if ($todayExpiredName == true) {
                            $this->todayExpiredV[$todayExpiredCount]['placa'] = $vehicle->plate_vehicle;
                            $this->todayExpiredV[$todayExpiredCount]['documents'] = $documents;
                            $todayExpiredName = false;
                            array_push($plus, 4);
                        }
                    } else {
                        // dd('la respuesta es vencida');

                        if ($expiredName == true) {
                            $this->expiredV[$expiredCount]['placa'] = $vehicle->plate_vehicle;
                            $this->expiredV[$expiredCount]['documents'] = $documents;
                            $expiredName = false;
                            array_push($plus, 5);
                            // 'dd($expired);'

                            DB::table('vehicles')
                            ->where('id', $vehicle->id)
                            ->update(['state_vehicle' => '1']);
                        }
                    }
                } else {
                    // dd('la respuesta es sin informacion');
                }

                // dd($date);

                // $aboutExpire[$count]['fullname'] = $driver->firstname . ' ' . $driver->lastname;
                // $aboutExpire[$count]['licencia'] = $document;
                //     for ($j=0; $j < count($this->colum); $j++) { 
                //         $document = driver::where('user_id',$driver[$i])->valiue($this->colum[$j]);
                if ($document != null) {
                    if ($document > $today) {

                        if ($date <= 60 && $date > 30) {
                            // dd('la respuesta es entre 60 y 30');

                            // $shortTimeExpire[$shortTimeExpireCount]['documents']['document'.$shortTimeExpireDoc] = $this->columname[$i];
                            $this->shortTimeExpireV[$shortTimeExpireCount]['documents'] += ['document' . $shortTimeExpireDoc => $this->vehicleColumname[$i]];

                            // dd($shortTimeExpire,$document,$date);
                            // $shortTimeExpireCount++;
                            $shortTimeExpireDoc++;
                            # $shortTimeExpire
                        } elseif ($date <= 30 && $date > 5) {
                            // dd('la respuesta es entre 30 y 5');

                            // $nearExpire[$nearExpireCount]['documents']['document'.$nearExpireDoc] = $this->columname[$i];
                            $this->nearExpireV[$nearExpireCount]['documents'] += ['document' . $nearExpireDoc => $this->vehicleColumname[$i]];
                            // dd($nearExpire,$document,$date);
                            // $nearExpireCount++;
                            $nearExpireDoc++;
                        } elseif ($date <= 5 && $date > 1) {
                            // dd('la respuesta es entre 5 y 1');

                            // $aboutExpire[$aboutExpireCount]['documents']['document'.$aboutExpireDoc] = $this->columname[$i];
                            $this->aboutExpireV[$aboutExpireCount]['documents'] += ['document' . $aboutExpireDoc => $this->vehicleColumname[$i]];
                            // dd($aboutExpire,$document,$date);
                            // $aboutExpireCount++;
                            $aboutExpireDoc++;
                        } else {
                            // dd('la respuesta es no hace nada por que no esta proxima a vencer');
                        }
                    } elseif ($document == $today) {
                        // dd('la respuesta es vence hoy');
                        // $todayExpired[$todayExpiredCount]['documents']['document'.$todayExpiredDoc] = $this->columname[$i];
                        $this->todayExpiredV[$todayExpiredCount]['documents'] += ['document' . $todayExpiredDoc => $this->vehicleColumname[$i]];
                        // dd($todayExpired,$document,$date);
                        // $todayExpiredCount++;
                        $todayExpiredDoc++;
                        # $todayExpired
                    } else {
                        // dd('la respuesta es vencida');
                        // $expired[$expiredCount]['documents']['document'.$expiredDoc] = $this->columname[$i];
                        $this->expiredV[$expiredCount]['documents'] += ['document' . $expiredDoc => $this->vehicleColumname[$i]];
                        // dd($expired,$document,$date);
                        // $expiredCount++;
                        $expiredDoc++;
                        # $expired
                    }
                } else {
                    // dd('la respuesta es sin informacion');
                }

                //     }

            }

            // dd($plus,$shortTimeExpireCount);
            for ($i = 0; $i < count($plus); $i++) {
                switch ($plus[$i]) {
                    case '1':
                        $shortTimeExpireCount++;
                        break;
                    case '2':
                        $nearExpireCount++;
                        break;
                    case '3':
                        $aboutExpireCount++;
                        break;
                    case '4':
                        $todayExpiredCount++;
                        break;
                    case '5':
                        $expiredCount++;
                        break;
                }
            }
            $plus = [];
        };

        $this->listExpire = [$this->shortTimeExpire, $this->nearExpire, $this->aboutExpire, $this->todayExpired, $this->expired];
        $this->listExpireV = [$this->shortTimeExpireV, $this->nearExpireV, $this->aboutExpireV, $this->todayExpiredV, $this->expiredV];
        // dd('en poco tiempo expiraran ', $this->shortTimeExpire, 'cerca de vencer ', $this->nearExpire, 'proximos a vencer ', $this->aboutExpire, 'hoy expiran ', $this->todayExpired, 'vencidos ', $this->expired);
        // dd('en poco tiempo expiraran ', $this->shortTimeExpireV, 'cerca de vencer ', $this->nearExpireV, 'proximos a vencer ', $this->aboutExpireV, 'hoy expiran ', $this->todayExpiredV, 'vencidos ', $this->expiredV);

        // $this->emit('expired', ['shortTimeExpire' => $shortTimeExpire], ['nearExpire' => $nearExpire]);
        // $this->emit('expired', ['shortTimeExpire' => $shortTimeExpire], ['nearExpire' => $nearExpire]);



        $this->emit('openModalExpire');
    }
}
// V
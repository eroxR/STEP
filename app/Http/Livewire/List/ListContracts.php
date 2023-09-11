<?php

namespace App\Http\Livewire\List;

use App\Models\contract;
use App\Models\contractType;
use App\Models\driver;
use App\Models\permit;
use App\Models\permitContingency;
use App\Models\User;
use App\Models\vehicle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use iio\libmergepdf\Merger;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ListContracts extends Component
{

    use WithFileUploads;

    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0, $contract_id, $contractType, $numberContract, $contractSigned, $driving = [], $cars = [], $driversRay = [], $vehiclesRay = [];
    public $contract, $permit_start_date, $permit_end_date, $permit_number, $permit_code, $typeContract, $idContract, $contingency, $table;
    public $fileContract = ['', 'colegios/', 'Empresas/', 'Empresa_Turismo/', 'Ocacionales/', 'Usuarios_Salud/', 'Comvenio_Empresarial/', 'Contrato_Vinculacion/'],
        $tContra = ['', 'colegios', 'Empresas', 'Empresa Turismo', 'Ocacionales', 'Usuarios Salud', 'Comvenio Empresarial', 'Contrato Vinculacion'],
        $doc = [
            'documentación_contrato_N-', 'Contrato_para_transporte_de_estudiantes_N-', 'Contrato_para_transporte_empresarial_N-', 'Contrato_para_transporte_de_turistas_N-',
            'Contrato_para_un_grupo_específico_de_usuarios_N-', 'Contrato_para_Transporte_de_usuarios_del_servicio_de_salud_N-',
            'convenio_de_colaboracion_empresarial_N-', 'Contrato_de_Vinculación_N-'
        ], $columDirver = [
            'license_expiration', 'certificate_drugs_alchoolemia', 'SIMIT_queries', 'psicosensometrico', 'Rules_Transit', 'Defensive_driving', 'First_aid', 'Road_safety',
            'date_eps', 'date_pension', 'date_layoffs', 'arl_date', 'date_compensationbox'

        ],
        $columnameDirver = [
            'licencia', 'Drogas y alchoolemia', 'Consultas SIMIT', 'psicosensometrico', 'Normas de Transito', 'Manejo Defensivo', 'Primeros Auxilios',
            'Seguridad Vial', 'Eps', 'Pension', 'Cesantias', 'Arl', 'Caja Compensacion', 'Beneficiario'

        ],$columVehicle = [
            'secure_end_date', 'technomechanical_end_date', 'expiration_card_operation', 'expiration_preventive','certificate_extracontractual', 'civil_contractual'

        ],
        $columnameVehicle = [
            'Seguro Obligatorio SOAT', 'Técnico Mecánica', 'Tarjeta de Operación', 'Preventiva', 'Extracontractual', 'Civil Contractual'

        ];

    protected $listeners = ['veiw', 'permit', 'limitOfCars'];

    public function permission()
    {

        // dd($this->typeContract,$this->idContract);

        // return $this->emit('prueba');
        // dd($this->permit_end_date,$this->driving,$this->cars);

        // $startDate = Carbon::createFromFormat('H:i a', '08:00 AM');
        // $endDate = Carbon::createFromFormat('H:i a', '07:00 PM');
  
        // $check = Carbon::now()->between($startDate, $endDate, true);
  
        // if($check){
        //     dd('In Between');
        // }else{
        //     dd('In Not Between');
        // }

        $stateContract = contract::where('id', $this->idContract)->value('state_contract');
        $contractN = contract::where('id', $this->idContract)->value('contract_number');
        $contractNText = contractType::where('id', contract::where('id', $this->idContract)->value('type_contract'))->value('contract_name');

        if ($stateContract != 3) {
            return $this->emit('crud', ['contractnumber' => $contractN], ['process' => 6], ['contractType' => $contractNText], ['id' => ''], ['permit_number' => ''], ['contingency' => '']);
        }


        $startContract = contract::where('id', $this->idContract)->value('date_start_contract');
        $endContract = contract::where('id', $this->idContract)->value('contract_end_date');

        $betweenStar = Carbon::parse($this->permit_start_date)->between($startContract, $endContract, true);
        $betweenEnd = Carbon::parse($this->permit_end_date)->between($startContract, $endContract, true);

        // dd($contractNText);

        if (!$betweenStar) {
            if (!$betweenEnd) {
                return $this->emit('crud', ['contractnumber' => $contractN], ['process' => 5], ['contractType' => $contractNText], ['id' => ''], ['permit_number' => ''], ['contingency' => '']);
            }
        } else if (!$betweenEnd) {
            return $this->emit('crud', ['contractnumber' => $contractN], ['process' => 5], ['contractType' => $contractNText], ['id' => ''], ['permit_number' => ''], ['contingency' => '']);
        }


        $this->validateDV();

        // dd($this->driversRay,$this->vehiclesRay);

        if ($this->driversRay != null) {
            // dd($drivers);
            if ($this->vehiclesRay != null) {
                return $this->emit('crud', ['contractnumber' => 1], ['process' => 4], ['contractType' => ''], ['id' => $this->driversRay], ['permit_number' => $this->vehiclesRay], ['contingency' => '']);
            } else {
                return $this->emit('crud', ['contractnumber' => 1], ['process' => 4], ['contractType' => ''], ['id' => $this->driversRay], ['permit_number' => ''], ['contingency' => '']);
            }
        } else if($this->vehiclesRay != null){
            // dd('no');
            if ($this->driversRay != null) {
                return $this->emit('crud', ['contractnumber' => 1], ['process' => 4], ['contractType' => ''], ['id' => ''], ['permit_number' => $this->vehiclesRay], ['contingency' => '']);
            } 
        }

        $thereIsContract = DB::table('permits')->where('contract', $this->idContract)->count();


        $thereIsContingency = DB::table('permit_contingencies')->where('contract', $this->idContract)->count();


        if ($thereIsContingency > 0) {

            $nextPermit = DB::table('permit_contingencies')->where('contract', $this->idContract)
                ->orderBy('permit_number', 'DESC')->limit(1)->value('permit_number');

            $this->permit_number = $nextPermit + 1;
        } else if ($thereIsContract > 0) {

            $nextPermit = DB::table('permits')->where('contract', $this->idContract)
                ->orderBy('permit_number', 'DESC')->limit(1)->value('permit_number');

            $this->permit_number = $nextPermit + 1;
        } else {

            $this->permit_number = 1;
        }

        $dateYear = Carbon::parse($this->permit_start_date);
        $yearFuec = $dateYear->year;

        $contractNumber =  DB::table('contracts')->where('id', $this->idContract)->value('contract_number');

        // $this->permit_code = '366003616' . $yearFuec . (string)$this->contract . '1507';
        $this->permit_code = '366003616' . $yearFuec . $contractNumber . '1507';

        if ($this->table == true) {
            $newPermit = permitContingency::create([
                'contract' => $this->idContract,
                'permit_start_date' => $this->permit_start_date,
                'permit_end_date' => $this->permit_end_date,
                'permit_number' => $this->permit_number,
                'fuec_state' => '1',
                'permit_code' => $this->permit_code,
            ]);
        } else {
            $newPermit = permit::create([
                'contract' => $this->idContract,
                'permit_start_date' => $this->permit_start_date,
                'permit_end_date' => $this->permit_end_date,
                'permit_number' => $this->permit_number,
                'fuec_state' => '1',
                'permit_code' => $this->permit_code,
            ]);
        }


        // $type_contract = DB::table('contracts')->where('id', $this->contract)->value('type_contract');

        if ($this->table == true) {
            $id = permitContingency::latest('id')->value('id');
        } else {
            $id = permit::latest('id')->value('id');
        }


        if ($this->table == true) {

            foreach ($this->driving as $driver => $driverid) {

                DB::table('dp_contingency')->insert([
                    'permit_id' => $id,
                    'driver_id' => $driverid,
                ]);
            }
        } else {
            foreach ($this->driving as $driver => $id) {

                $newPermit->driver()->attach([$driver => $id]);
            }
        }

        if ($this->table == true) {
            if ($this->typeContract == 4) {

                DB::table('cvp_contingency')
                    ->where('contract_id', $this->idContract)
                    ->update(['permit_id' => $id]);
            }
        } else {
            if ($this->typeContract == 4) {

                DB::table('contract_vehicle_permit')
                    ->where('contract_id', $this->idContract)
                    ->update(['permit_id' => $id]);
            }
        }

        // foreach ($this->cars as $car => $id) {

        //     $newPermit->vehicle()->attach([$car => $id]);
        // }

        if ($this->table == true) {
            foreach ($this->cars as $car) {

                DB::table('cvp_contingency')->insert([
                    'contract_id' => $this->idContract,
                    'vehicle_id' => $car,
                    'permit_id' => $id
                ]);
            }
        } else {
            foreach ($this->cars as $car) {

                DB::table('contract_vehicle_permit')->insert([
                    'contract_id' => $this->idContract,
                    'vehicle_id' => $car,
                    'permit_id' => $id
                ]);
            }
        }

        $contractType = DB::table('contracts')->join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
            ->where('contracts.id', $this->idContract)->value('description_typeContract');

        $this->emit('crud', ['contractnumber' => $contractNumber], ['process' => 1], ['contractType' => $contractType], ['id' => $id], ['permit_number' => $this->permit_number], ['contingency' => $this->table]);
        $this->clear();
    }

    public function render()
    {

        switch ($this->filtre) {
            case '1':
                $contracts = DB::table('contracts')->where('type_contract', 1)->orderBy('id', $this->direction)
                    ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '2':
                $contracts = DB::table('contracts')->where('type_contract', 2)->orderBy('id', $this->direction)
                    ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '3':
                $contracts = DB::table('contracts')->where('type_contract', 3)->orderBy('id', $this->direction)
                    ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '4':
                $contracts = DB::table('contracts')->where('type_contract', 4)->orderBy('id', $this->direction)
                    ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            case '5':
                $contracts = DB::table('contracts')->where('type_contract', 5)->orderBy('id', $this->direction)
                    ->where('contract_number', 'like', '%' . $this->search . '%')->get();
                break;

            default:
                $contracts = DB::table('contracts')->orderBy('id', $this->direction)
                    ->where('contract_number', 'like', '%' . $this->search . '%')->get();

                break;
        }

        $this->ide != (0) ? $contracsSelected = DB::table('contracts')->where('id', $this->ide)->get() : $contracsSelected = DB::table('contracts')->orderBy('id', 'desc')->limit(1)->get();

        foreach ($contracsSelected as $key) {
            $contractNow = $key->id;
        }


        $this->ide != (0) ? $permits = DB::table('permits')->where('contract', $this->ide)->get() : $permits = DB::table('permits')->where('contract', $contractNow)->get();
        // $prueba = DB::table('permits')->where('contract', 102)->get();
        // dd($contracsSelected,$contractNow,$this->ide,$permits,$prueba);

        $allpermits = permit::all();

        $drivers = User::select('id', 'identificationcard', DB::raw('CONCAT(users.firstname," ",users.secondname," ",users.lastname," ",users.motherslastname) As nameFull'))
            ->where('charge', '5')
            ->where('user_state', '!=' ,'1')
            ->orderBy('id', 'DESC')
            ->get();

        $vehicles = vehicle::select('id', 'plate_vehicle', 'side_vehicle', 'secure_end_date')
            ->where('state_vehicle','!=','3')
            ->orderBy('id', 'DESC')
            ->get();


        return view('livewire.list.list-contracts', compact('contracts', 'contracsSelected', 'permits', 'allpermits', 'drivers', 'vehicles'));
    }

    public function order()
    {

        if ($this->direction == 'asc') {
            $this->direction = 'desc';
        } else {
            $this->direction = 'asc';
        }
    }

    public function veiw($id)
    {

        $this->emit('openModalView');
    }

    public function clear()
    {
        $this->reset([
            'contract',
            'permit_start_date',
            'permit_end_date',
            'permit_number',
            'permit_code',
            'typeContract',
            'contingency',

        ]);
        $this->driving = [];
        $this->cars = [];
    }

    public function permit($id)
    {

        $this->emit('openModalPermit');
    }

    public function contractSigned()
    {

        // dd($this->contract_id,$this->contractType,$this->numberContract);
        // dd($this->contractSigned);

        // documentación_contrato_N-6029.pdf

        if ($this->contractSigned == null) {
            return $this->emit('outputs', ['contractnumber' => ''], ['contractType' => ''], ['process' => 3],);
        }

        $directory = DB::table('documents')->where('documentable_id', $this->contract_id)->where('documentable_Type', 'like', '%\contract%')->value('directory');
        $document_id = DB::table('documents')->where('documentable_id', $this->contract_id)->where('documentable_Type', 'like', '%\contract%')->value('id');

        // dd($newRuta);

        $agree = new Merger;

        $agree->addFile($this->contractSigned->getRealPath());
        $agree->addFile($directory);


        $output = $agree->merge();

        $fileName = $this->doc[$this->contractType] . $this->numberContract . '.pdf';

        $url = 'storage/STEP/contract/' . $this->fileContract[$this->contractType] . $fileName;

        $bytesEscritos = file_put_contents($url, $output);

        if ($bytesEscritos > 0) {
            $newRuta = str_replace('storage', 'public', $directory);
            Storage::delete($newRuta);

            DB::table('documents')->where('id', $document_id)->update(['document_name' => $fileName, 'directory' => $url, 'extension' => '.pdf']);

            DB::table('contracts')->where('id', $this->contract_id)->update(['signed_contract' => 2]);

            $this->emit('outputs', ['contractnumber' => $this->numberContract], ['contractType' => $this->tContra[$this->contractType]], ['process' => 1],);
        } else {
            $this->emit('outputs', ['contractnumber' => $this->numberContract], ['contractType' => $this->tContra[$this->contractType]], ['process' => 2],);
        }




        // dd($bytesEscritos);
    }

    public function limitOfCars($id, $typeContract, $contingency)
    {
        $this->typeContract = $typeContract[0];
        $this->idContract = $id[0];
        $this->table = $contingency;
        $limitcar = DB::table('contracts')->where('id', $id)->where('type_contract', $typeContract)->value('quantity_vehicle');
        // dd($limitcar);
        $this->emit('assignLimit', ['limitcar' => $limitcar]);
    }

    public function validateDV()
    {
        date_default_timezone_set("America/Bogota"); //Zona horaria de Colombia
        $today = Carbon::today();
        $documents = [];
        $dates = [];

        $positionD = 0;
        $positionV = 0;

        // conductores

        foreach ($this->driving  as $dirver) {
            $state = driver::where('user_id', $dirver)->value('driver_status');

            $counterD = 1;
            $NameD = true;

            if ($state == '1') {
                // dd('si');
                $driverName = User::select(DB::raw('CONCAT(users.firstname," ",users.secondname," ",users.lastname," ",users.motherslastname) As nameFull'))->where('id', $dirver)->value('nameFull');
                for ($i = 0; $i < count($this->columDirver); $i++) {
                    if ($i >= 8 && $i <= 12) {
                        $date = Carbon::createFromDate(User::where('id', $dirver)->value($this->columDirver[$i]));
                    } else {
                        $date = Carbon::createFromDate(driver::where('user_id', $dirver)->value($this->columDirver[$i]));
                    }
                    $expiereDate = $date->day . ' de ' . $date->monthName . ' de ' . $date->year;

                    if ($date < $today) {
                        if ($NameD == true) {
                            $this->driversRay[$positionD]['fullname'] = $driverName;
                            $this->driversRay[$positionD]['documents'] = $documents;
                            $this->driversRay[$positionD]['dates'] = $dates;
                            $NameD = false;
                        }

                        $this->driversRay[$positionD]['documents'] += ['document' . $counterD => $this->columnameDirver[$i]];
                        $this->driversRay[$positionD]['dates'] += ['date' . $counterD => $expiereDate];

                        $counterD++;
                    }
                }
            } else {
                // dd('no');
                $driverName = User::select(DB::raw('CONCAT(users.firstname," ",users.secondname," ",users.lastname," ",users.motherslastname) As nameFull'))->where('id', $dirver)->value('nameFull');
                for ($i = 0; $i < count($this->columDirver); $i++) {
                    if ($i >= 8 && $i <= 12) {
                        $date = Carbon::parse(User::where('id', $dirver)->value($this->columDirver[$i]));
                    } else {
                        $date = Carbon::parse(driver::where('user_id', $dirver)->value($this->columDirver[$i]));
                    }
                    $expiereDate = $date->day . ' de ' . $date->monthName . ' de ' . $date->year;

                    if ($this->permit_end_date > $date) {
                        if ($NameD == true) {
                            $this->driversRay[$positionD]['fullname'] = $driverName;
                            $this->driversRay[$positionD]['documents'] = $documents;
                            $this->driversRay[$positionD]['dates'] = $dates;
                            $NameD = false;
                        }

                        $this->driversRay[$positionD]['documents'] += ['document' . $counterD => $this->columnameDirver[$i]];
                        $this->driversRay[$positionD]['dates'] += ['date' . $counterD => $expiereDate];

                        $counterD++;
                    }
                }
            }
            $positionD++;
        }

        // Vehiculos

        foreach ($this->cars as $vehicle) {
            $state = vehicle::where('id', $vehicle)->value('state_vehicle');

            $counterV = 1;
            $NameV = true;

            if ($state == '1') {
                // dd('si');
                $plateVehicle = vehicle::where('id', $vehicle)->value('plate_vehicle');
                for ($i = 0; $i < count($this->columVehicle); $i++) {

                    $date = Carbon::createFromDate(vehicle::where('id', $vehicle)->value($this->columVehicle[$i]));

                    $expiereDate = $date->day . ' de ' . $date->monthName . ' de ' . $date->year;

                    if ($date < $today) {
                        if ($NameV == true) {
                            $this->vehiclesRay[$positionV]['plate'] = $plateVehicle;
                            $this->vehiclesRay[$positionV]['documents'] = $documents;
                            $this->vehiclesRay[$positionV]['dates'] = $dates;
                            $NameV = false;
                        }

                        $this->vehiclesRay[$positionV]['documents'] += ['document' . $counterV => $this->columnameVehicle[$i]];
                        $this->vehiclesRay[$positionV]['dates'] += ['date' . $counterV => $expiereDate];

                        $counterV++;
                    }
                }
            } else {
                // dd('no');
                $plateVehicle = vehicle::where('id', $vehicle)->value('plate_vehicle');
                for ($i = 0; $i < count($this->columVehicle); $i++) {

                    $date = Carbon::createFromDate(vehicle::where('id', $vehicle)->value($this->columVehicle[$i]));

                    $expiereDate = $date->day . ' de ' . $date->monthName . ' de ' . $date->year;

                    if ($this->permit_end_date > $date) {
                        if ($NameV == true) {
                            $this->vehiclesRay[$positionV]['plate'] = $plateVehicle;
                            $this->vehiclesRay[$positionV]['documents'] = $documents;
                            $this->vehiclesRay[$positionV]['dates'] = $dates;
                            $NameV = false;
                        }

                        $this->vehiclesRay[$positionV]['documents'] += ['document' . $counterV => $this->columnameVehicle[$i]];
                        $this->vehiclesRay[$positionV]['dates'] += ['date' . $counterV => $expiereDate];

                        $counterV++;
                    }
                }
            }
            $positionV++;
        }
    }
}

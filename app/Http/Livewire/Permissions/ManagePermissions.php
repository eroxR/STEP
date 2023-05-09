<?php

namespace App\Http\Livewire\Permissions;

use App\Models\contract;
use App\Models\contract_type;
use App\Models\contractType;
use App\Models\driver;
use App\Models\permit;
use App\Models\vehicle;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Arr;

class ManagePermissions extends Component
{

    public $search = "";
    public $sort = 'id';
    public $direction = 'desc';
    public $contract, $permit_start_date, $permit_end_date, $permit_number, $permit_code, $typeContract;
    public $driving = [];
    public $cars = [];
    public $editCars = [], $editDrives = [], $firstCars, $firstDrives, $editContratype, $editContrat;

    public $contractSelects = null, $carsSelect = null, $editPermit = null, $driveSelect = null;

    protected $listeners = ['limitOfCars', 'destroy', 'edit'];

    protected $rules = [

        'editPermit.contract'  => 'required',
        'editPermit.permit_start_date'  => 'required',
        'editPermit.permit_end_date'  => 'required',
        'editPermit.permit_number'  => 'required',
        'editPermit.fuec_state'  => 'required',
        'editPermit.permit_code'  => 'required',
    ];

    public function store()
    {

        // return $this->emit('prueba');
        // dd($this->permit_end_date,$this->driving,$this->cars);
        $thereIsContract = DB::table('permits')->where('contract', $this->contract)->count();

        if ($thereIsContract > 0) {

            $nextPermit = DB::table('permits')->where('contract', $this->contract)
                ->orderBy('permit_number', 'DESC')->limit(1)->value('permit_number');

            $this->permit_number = $nextPermit + 1;
        } else {

            $this->permit_number = 1;
        }

        $dateYear = Carbon::parse($this->permit_start_date);
        $yearFuec = $dateYear->year;

        $contractNumber =  DB::table('contracts')->where('id', $this->contract)->value('contract_number');

        // $this->permit_code = '366003616' . $yearFuec . (string)$this->contract . '1507';
        $this->permit_code = '366003616' . $yearFuec . $contractNumber . '1507';

        $newPermit = permit::create([
            'contract' => $this->contract,
            'permit_start_date' => $this->permit_start_date,
            'permit_end_date' => $this->permit_end_date,
            'permit_number' => $this->permit_number,
            'fuec_state' => '0',
            'permit_code' => $this->permit_code,
        ]);

        foreach ($this->driving as $driver => $id) {

            $newPermit->driver()->attach([$driver => $id]);
        }

        $type_contract = DB::table('contracts')->where('id', $this->contract)->value('type_contract');

        $id = permit::latest('id')->value('id');

        if ($type_contract == 4) {

            DB::table('contract_vehicle_permit')
                ->where('contract_id', $this->contract)
                ->update(['permit_id' => $id]);
        }

        // foreach ($this->cars as $car => $id) {

        //     $newPermit->vehicle()->attach([$car => $id]);
        // }

        foreach ($this->cars as $car) {

            DB::table('contract_vehicle_permit')->insert([
                'contract_id' => $this->contract,
                'vehicle_id' => $car,
                'permit_id' => $id
            ]);
        }

        $contractType = DB::table('contracts')->join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
            ->where('contracts.id', $this->contract)->value('description_typeContract');

        $this->emit('crud', ['contractnumber' => $contractNumber], ['process' => 1], ['contractType' => $contractType], ['id' => $id], ['permit_number' => $this->permit_number]);
        $this->clear();
    }

    // public function prueba()
    // {
    //     dd($this->editCars, $this->firstCars, $this->editDrives, $this->firstDrives);
    // }

    // actualizar un permiso
    public function update()
    {

        if ($this->editDrives == 0 || $this->editDrives == null) {

            DB::table('driver_permit')->where('permit_id', '=', $this->editPermit->id)->delete();

            // dd('eliminar todo');

        } elseif ($this->firstDrives == count($this->editDrives)) {


            $existsDrives = DB::table('driver_permit')->where('permit_id', $this->editPermit->id)->get();
            $accountant = 0;

            foreach ($existsDrives as $key) {


                // if ($exist == null) {
                DB::table('driver_permit')->where('id', $key->id)->update(['driver_id' => $this->editDrives[$accountant]]);
                // dd('si',$exist);
                // }
                $accountant++;
            }
        } else if ($this->firstDrives > count($this->editDrives)) {

            $resta = $this->firstDrives - count($this->editDrives);
            $accountant = 0;

            DB::table('driver_permit')->where('permit_id', '=', $this->editPermit->id)->limit($resta)->delete();

            $existsDrives = DB::table('driver_permit')->where('permit_id', $this->editPermit->id)->get();

            if ($existsDrives != null) {

                foreach ($existsDrives as $key) {

                    DB::table('driver_permit')->where('id', $key->id)->update(['driver_id' => $this->editDrives[$accountant]]);

                    $accountant++;
                }
            }

            // dd('mayor');

        } elseif ($this->firstDrives < count($this->editDrives)) {

            $resta = count($this->editDrives) - $this->firstDrives;
            $existsDrives = DB::table('driver_permit')->where('permit_id', $this->editPermit->id)->get();
            $accountant = 0;
            // dd($this->editCars);

            if ($existsDrives != null) {
                foreach ($existsDrives as $key) {

                    DB::table('driver_permit')->where('id', $key->id)->update(['driver_id' => $this->editDrives[$accountant]]);
                    $this->editDrives = Arr::except($this->editDrives, [$accountant]);

                    $accountant++;
                }
            }

            foreach ($this->editDrives as $key) {

                DB::table('driver_permit')->insert([
                    'permit_id' => $this->editPermit->id,
                    'driver_id' => $this->editDrives[$accountant],
                ]);

                $accountant++;
            }

            // dd($this->editCars, $con, $resta);                    
            // dd('menor');
        }

        if ($this->editCars == 0 || $this->editCars == null) {

            DB::table('contract_vehicle_permit')->where('permit_id', '=', $this->editPermit->id)->delete();

            // dd('eliminar todo');

        } elseif ($this->firstCars == count($this->editCars)) {


            $existsCars = DB::table('contract_vehicle_permit')->where('permit_id', $this->editPermit->id)->get();
            $accountants = 0;

            foreach ($existsCars as $key) {


                // if ($exist == null) {
                DB::table('contract_vehicle_permit')->where('id', $key->id)->update(['vehicle_id' => $this->editCars[$accountants]]);
                // dd('si',$exist);
                // }
                $accountants++;
            }
        } else if ($this->firstCars > count($this->editCars)) {

            $resta = $this->firstCars - count($this->editCars);
            $accountants = 0;

            DB::table('contract_vehicle_permit')->where('permit_id', '=', $this->editPermit->id)->limit($resta)->delete();

            $existsCars = DB::table('contract_vehicle_permit')->where('permit_id', $this->editPermit->id)->get();

            if ($existsCars != null) {

                foreach ($existsCars as $key) {

                    DB::table('contract_vehicle_permit')->where('id', $key->id)->update(['vehicle_id' => $this->editCars[$accountants]]);

                    $accountants++;
                }
            }
            // dd('mayor');

        } elseif ($this->firstCars < count($this->editCars)) {

            $resta = count($this->editCars) - $this->firstCars;
            $existsCars = DB::table('contract_vehicle_permit')->where('permit_id', $this->editPermit->id)->get();
            $accountants = 0;
            // dd($this->editCars);

            if ($existsCars != null) {
                foreach ($existsCars as $key) {

                    DB::table('contract_vehicle_permit')->where('id', $key->id)->update(['vehicle_id' => $this->editCars[$accountants]]);
                    $this->editCars = Arr::except($this->editCars, [$accountants]);

                    $accountants++;
                }
            }

            foreach ($this->editCars as $key) {

                DB::table('contract_vehicle_permit')->insert([
                    'permit_id' => $this->editPermit->id,
                    'contract_id' => $this->editPermit->contract,
                    'vehicle_id' => $this->editCars[$accountants],
                ]);

                $accountants++;
            }

            // dd($this->editCars, $con, $resta);                    
            // dd('menor');
        }


        $this->editPermit->save();

        $this->emit('crud', ['contractnumber' => $this->editContrat], ['process' => 2], ['contractType' => $this->editContratype], ['id' => 0], ['permit_number' =>  $this->editPermit->permit_number]);

        $this->clear();
    }

    public function destroy($id)
    {
        $permit_number = DB::table('permits')->where('id', $id)->value('permit_number');
        $contractnumber = DB::table('contracts')->join('permits', 'contracts.id', '=', 'permits.contract')
            ->where('permits.id', $id)->value('contract_number');
        $contractType = DB::table('contracts')->join('permits', 'contracts.id', '=', 'permits.contract')
            ->join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
            ->where('permits.id', $id)->value('description_typeContract');
        // dd($plate);


        DB::table('driver_permit')->where('permit_id', '=', $id)->delete();

        DB::table('contract_vehicle_permit')->where('permit_id', '=', $id)->delete();

        permit::destroy($id);

        $this->emit('crud', ['contractnumber' => $contractnumber], ['process' => 3], ['contractType' => $contractType], ['id' => 0], ['permit_number' => $permit_number]);
    }

    // cargar los datos del permiso que se van a editar
    public function edit(permit $permit)
    {
        $this->editPermit = $permit;

        $this->carsSelect = vehicle::join('contract_vehicle_permit', 'contract_vehicle_permit.vehicle_id', '=', 'vehicles.id')
            ->select('contract_vehicle_permit.id', 'vehicles.id', 'plate_vehicle', 'side_vehicle', 'secure_end_date', 'technomechanical_end_date')
            ->where('contract_vehicle_permit.permit_id', $this->editPermit->id)->get();

        $contadorCar = 0;
        foreach ($this->carsSelect as $key) {
            $this->editCars = Arr::add($this->editCars, $contadorCar, $key->id);
            $contadorCar++;
        }

        $this->firstCars = count($this->editCars);

        $this->driveSelect = driver::join('users', 'drivers.user_id', '=', 'users.id')
            ->join('driver_permit', 'driver_permit.driver_id', '=', 'drivers.id')
            ->select('drivers.id', 'identificationcard', DB::raw('CONCAT(users.firstname, " ", users.secondname, " ", users.lastname, " ", users.motherslastname) As nameFull'))
            ->where('driver_permit.permit_id', $this->editPermit->id)->get();

        $contadordrive = 0;
        foreach ($this->driveSelect as $key) {
            $this->editDrives = Arr::add($this->editDrives, $contadordrive, $key->id);
            $contadordrive++;
        }

        $this->firstDrives = count($this->editDrives);

        // $this->editContratype = contract::join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
        //     ->where('contracts.id', $this->editPermit->contract)->value('description_typeContract');

        $this->editContratype = DB::table('contracts')->where('contracts.id', $this->editPermit->contract)->value('type_contract');

        $this->editContrat = DB::table('contracts')->where('id', $this->editPermit->contract)->value('contract_number');

        $this->emit('openModalEdit');
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

        ]);
        $this->driving = [];
        $this->cars = [];
    }

    public function render()
    {

        $permissions = permit::join('contracts', 'permits.contract', '=', 'contracts.id')
            ->join('contract_types', 'contracts.type_contract', '=', 'contract_types.id')
            ->select('permits.id', 'contract_number', 'permit_start_date', 'permit_end_date', 'permit_number', 'description_typeContract', 'fuec_state')
            ->where('contract_number', 'like', '%' . $this->search . '%')
            ->orwhere('description_typeContract', 'like', '%' . $this->search . '%')
            ->orwhere('permit_start_date', 'like', '%' . $this->search . '%')
            ->orwhere('permit_end_date', 'like', '%' . $this->search . '%')
            ->orwhere('permit_number', 'like', '%' . $this->search . '%')
            ->orwhere('fuec_state', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)->get();

        $drivers = driver::join('Users', 'drivers.user_id', '=', 'users.id')
            ->select('drivers.id', 'identificationcard', DB::raw('CONCAT(users.firstname, " ", users.secondname, " ", users.lastname, " ", users.motherslastname) As nameFull'))->get();

        $vehicles = vehicle::all();

        $typeContracts = contractType::pluck('description_typeContract', 'id');

        return view('livewire.permissions.manage-permissions', compact('permissions', 'drivers', 'vehicles', 'typeContracts'));
    }

    public function order($sort)
    {

        if ($this->sort == $sort) {

            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'desc';
        }
    }

    public function updatedtypeContract($typeContract)
    {

        $this->contractSelects = contract::select('id', 'contract_number')
            ->where('type_contract', $typeContract)
            ->orderBy('contract_number', 'DESC')
            ->get();
        // dd($this->contractSelects,$this->driving,$this->cars,$this->permit_start_date);
    }

    public function limitOfCars()
    {
        $limitcar = DB::table('contracts')->where('id', $this->contract)->value('quantity_vehicle');
        // dd($limitcar);
        $this->emit('assignLimit', ['limitcar' => $limitcar]);
    }

    // public function pdf(){      

    //     return redirect()->route('pdfs.pdf-fuec', ['id' => 2]);

    // }
}

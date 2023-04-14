<?php

namespace App\Http\Livewire\List;

use App\Models\permit;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListFuec extends Component
{
    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0, $countCars = 0, $countDrive = 0;

    protected $listeners = ['veiw', 'permit'];

    public function render()
    {

        $permits = DB::table('permits')
            // ->join('contracts', 'contracts.id', 'permits.contract')
            ->orderBy('permits.id', $this->direction)
            ->where('permit_number', 'like', '%' . $this->search . '%')
            ->get();

        $typeContracts =  DB::table('contracts')
        ->select('id','type_contract','contract_number')
        ->get();           

        $this->ide != (0) ? $permitsSelected = DB::table('permits')
            ->join('contracts', 'contracts.id', 'permits.contract')
            ->where('permits.id', $this->ide)
            ->get() :
            $permitsSelected = DB::table('permits')
            ->join('contracts', 'contracts.id', 'permits.contract')
            ->orderBy('permits.id', 'desc')
            ->limit(1)
            ->get();

        foreach ($permitsSelected as $key) {
            $permitNow = $key->id;
        }

        $this->ide != (0) ? $cars = DB::table('contract_vehicle_permit')
            ->join('vehicles', 'vehicles.id', 'vehicle_id')
            ->where('permit_id', $this->ide)
            ->get() :
            $cars = DB::table('contract_vehicle_permit')
            ->join('vehicles', 'vehicles.id', 'vehicle_id')
            ->where('permit_id', 173)
            ->get();

        $this->ide != (0) ? $drivers = DB::table('driver_permit')
            ->join('drivers', 'drivers.id', 'driver_id')
            ->join('users', 'users.id', 'user_id')
            ->where('permit_id', $this->ide)
            ->get() :
            $drivers = DB::table('driver_permit')
            ->join('drivers', 'drivers.id', 'driver_id')
            ->join('users', 'users.id', 'user_id')
            ->where('permit_id', 173)
            ->get();

        $allDrivers = DB::table('driver_permit')
            ->join('drivers', 'drivers.id', 'driver_id')
            ->join('users', 'users.id', 'user_id')
            ->get();

        $allCars = DB::table('contract_vehicle_permit')
            ->join('vehicles', 'vehicles.id', 'vehicle_id')
            ->get();

        // foreach ($permits as $permit) {

        //     foreach ($allDrivers as $allDriver) {
        //         if ($allDriver->permit_id == $permit->id) {
        //             $this->prueba =  $permit->id;
        //         }
        //     }
        // }

        // dd($permits, $allDrivers, $allCars, $this->prueba);




        // $this->ide != (0) ? $permits = DB::table('permits')->where('contract', $this->ide)->get() : $permits = DB::table('permits')->where('contract', $contractNow)->get();
        // $prueba = DB::table('permits')->where('contract', 102)->get();
        // dd($contracsSelected,$contractNow,$this->ide,$permits,$prueba);

        // $allpermits = permit::all();


        return view('livewire.list.list-fuec', compact('permits', 'permitsSelected', 'cars', 'drivers', 'allDrivers', 'allCars', 'typeContracts'));
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

    public function permit($id)
    {

        $this->emit('openModalPermit');
    }
}

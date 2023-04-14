<?php

namespace App\Http\Livewire\List;

use App\Models\permit;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListVehicles extends Component
{
    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0;

    protected $listeners = ['veiw','permit'];

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

        return view('livewire.list.list-vehicles', compact('contracts','contracsSelected','permits','allpermits'));
    }

    public function order(){
        
        if ($this->direction == 'asc') {
            $this->direction = 'desc';
        } else {
            $this->direction = 'asc';
        }
        

    }

    public function veiw($id){

        $this->emit('openModalView');
    }

    public function permit($id){

        $this->emit('openModalPermit');
    }
}

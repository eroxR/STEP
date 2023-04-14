<?php

namespace App\Http\Livewire;

use App\Models\contract;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Totals extends Component
{
    public function render()
    {
        $cantColegios = DB::table('contracts')->where('type_contract', 1)->count('id');
        $cantEmpresas = DB::table('contracts')->where('type_contract', 2)->count('id');
        $cantEmpresaTurismo = DB::table('contracts')->where('type_contract', 3)->count('id');
        $cantOcacionales = DB::table('contracts')->where('type_contract', 4)->count('id');
        $cantUsuariosSalud = DB::table('contracts')->where('type_contract', 5)->count('id');
        return view('livewire.totals', compact('cantColegios', 'cantEmpresas', 'cantEmpresaTurismo', 'cantOcacionales', 'cantUsuariosSalud'));
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\dofa;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pesv extends Component
{
    public function render()
    {

        // $dofas = dofa::all()->limit(5);
        $dofasF = DB::table('dofas')->select('codigo', 'capacidad_factor', 'contexto')
        ->where('codigo', 'like', 'F'. '%')->limit(5)->get();
        $dofasA = DB::table('dofas')->select('codigo', 'capacidad_factor', 'contexto')
        ->where('codigo', 'like', 'A'. '%')->limit(5)->get();
        $dofasD = DB::table('dofas')->select('codigo', 'capacidad_factor', 'contexto')
        ->where('codigo', 'like', 'D'. '%')->limit(5)->get();
        $dofasO = DB::table('dofas')->select('codigo', 'capacidad_factor', 'contexto')
        ->where('codigo', 'like', 'O'. '%')->limit(5)->get();

        return view('livewire.pesv', compact('dofasF','dofasA','dofasD','dofasO'));
    }
}

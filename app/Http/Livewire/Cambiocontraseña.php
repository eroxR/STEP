<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cambiocontraseña extends Component
{

    public $open= false;

    public function render()
    {
        return view('livewire.cambiocontraseña');
    }
}

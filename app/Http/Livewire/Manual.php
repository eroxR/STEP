<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Manual extends Component
{

    public $counter = 1;
    public $open = false;

    // public function abrir(){
    //     $this->emitTo('contac-modal', 'show');
    // }

    // public function abrir(){
    //     $this->open = true;
    // }

    public function render()
    {
        return view('livewire.manual');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContacModal extends Component
{
    public $show = true;

    protected $isteners = [
        'show' =>  'show'
    ];

    public function show(){
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.contac-modal');
    }
}

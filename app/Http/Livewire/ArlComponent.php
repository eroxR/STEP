<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Arl;
use Livewire\WithPagination;

class ArlComponent extends Component
{

    use WithPagination;

    public $description_arl;
    public $selected_id;
    public $updateMode = false;

    protected $rules = [
        'description_arl' => 'required|string|max:255',
    ];


    public function render()
    {
        $arls = Arl::paginate(10);
        return view('livewire.arl-component', ['arls' => $arls]);
    }

    public function resetInputFields()
    {
        $this->description_arl = '';
    }

    public function store()
    {
        $this->validate();

        Arl::create([
            'description_arl' => $this->description_arl
        ]);

        session()->flash('message', 'ARL Created Successfully.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $arl = Arl::findOrFail($id);
        $this->selected_id = $id;
        $this->description_arl = $arl->description_arl;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate();

        if ($this->selected_id) {
            $arl = Arl::find($this->selected_id);
            $arl->update([
                'description_arl' => $this->description_arl,
            ]);

            $this->updateMode = false;

            session()->flash('message', 'ARL Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        Arl::find($id)->delete();
        session()->flash('message', 'ARL Deleted Successfully.');
    }
}

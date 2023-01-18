<?php

namespace App\Http\Livewire\Contracts;

use App\Models\contract;
use App\Models\contractType;
use App\Models\identification;
use App\Models\paymentType;
use App\Models\vehicle;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Redirector;
use PDF;

class ManageContracts extends Component
{

    public $search = "";
    public $sort = 'id';
    public $direction = 'desc';
    public $contract_number, $type_contract, $state_contract, $date_start_contract, $contract_end_date, $contracting_name, $school_name, $destination_place, $contract_value, $route_trip_contract, $contract_document, $expedition_identificationcard,
        $contracting_phone, $contracting_direction, $legal_representative, $passenger_quantity, $total_disposition, $quantity_vehicle, $contract_signing_date, $identificationcard_represent_legal, $trip_from, $trip_to, $place_of_origin, $return_place,
        $legal_representative_expedition_identificationcard, $tipe_pay, $identification, $address_school, $secure_policy, $entity_name, $cooperation_contract, $identification_legal_representative, $identification_representative_group, $identificationcard_representative_group,
        $group_representative_name, $dateofexpedition_representative_group, $vehicle;

    public $editContracts = null, $descriptionTypeContract = null, $vehicleSelect = null;

    // protected $listeners = ['pdf'];
    protected $listeners = ['destroy', 'edit'];

    protected $rules = [

        'editContracts.contract_number'  => 'required',
        'editContracts.type_contract'  => 'required',
        'editContracts.route_trip_contract'  => 'required',
        'editContracts.date_start_contract'  => 'required',
        'editContracts.contract_end_date'  => 'required',
        'editContracts.contract_value'  => 'required',
        'editContracts.contracting_name'  => 'required',
        'editContracts.state_contract'  => 'required',
        'editContracts.identification'  => 'required',
        'editContracts.contract_document'  => 'required',
        'editContracts.expedition_identificationcard'  => 'required',
        'editContracts.contracting_phone'  => 'required',
        'editContracts.contracting_direction'  => 'required',
        'editContracts.legal_representative'  => 'required',
        'editContracts.legal_representative_expedition_identificationcard'  => 'required',
        'editContracts.passenger_quantity'  => 'required',
        'editContracts.total_disposition'  => 'required',
        'editContracts.quantity_vehicle'  => 'required',
        'editContracts.cooperation_contract'  => 'required',
        'editContracts.entity_name'  => 'required',
        'editContracts.secure_policy'  => 'required',
        'editContracts.tipe_pay'  => 'required',
        'editContracts.contract_signing_date'  => 'required',
        'editContracts.school_name'  => 'required',
        'editContracts.address_school'  => 'required',
        'editContracts.identification_represent_legal'  => 'required',
        'editContracts.identificationcard_represent_legal'  => 'required',
        'editContracts.trip_from'  => 'required',
        'editContracts.trip_to'  => 'required',
        'editContracts.place_of_origin'  => 'required',
        'editContracts.destination_place'  => 'required',
        'editContracts.return_place'  => 'required',
        'editContracts.identificationcard_representative_group'  => 'required',
        'editContracts.group_representative_name'  => 'required',
        'editContracts.dateofexpedition_representative_group'  => 'required',
        'editContracts.signed_contract'  => 'required',
    ];

    public function store()
    {
        $this->contract_number = DB::table('contracts')->where('type_contract', $this->type_contract)->orderBy('contract_number', 'DESC')
            ->limit(1)->value('contract_number');
        $this->contract_number = $this->contract_number + 1;

        // switch ($this->type_contract) {
        //     case '1':

        //         $newContraN = DB::select('select contract_number from contracts where type_contract = 1 ORDER BY contract_number DESC LIMIT 1');
        //         $valor = $newContraN[0]->contract_number;
        //         $this->identify_contract = $valor + 1;
        //         break;

        //     case '2':
        //         $newContraN = DB::select('select contract_number from contracts where type_contract = 2 ORDER BY contract_number DESC LIMIT 1');
        //         $valor = $newContraN[0]->contract_number;
        //         $this->identify_contract = $valor + 1;
        //         break;

        //     case '3':
        //         $newContraN = DB::select('select contract_number from contracts where type_contract = 3 ORDER BY contract_number DESC LIMIT 1');
        //         $valor = $newContraN[0]->contract_number;
        //         $this->identify_contract = $valor + 1;
        //         break;

        //     case '4':
        //         $newContraN = DB::select('select contract_number from contracts where type_contract = 4 ORDER BY contract_number DESC LIMIT 1');
        //         $valor = $newContraN[0]->contract_number;
        //         $this->identify_contract = $valor + 1;
        //         break;

        //     case '5':
        //         $newContraN = db::select('select contract_number from contracts where type_contract = 5 ORDER BY contract_number DESC LIMIT 1');
        //         $valor = $newContraN[0]->contract_number;
        //         $this->identify_contract = $valor + 1;
        //         break;

        //     default:
        //         # code...
        //         break;
        // }

        contract::create([

            'contract_number' => $this->contract_number,
            'type_contract' => $this->type_contract,
            'route_trip_contract' => $this->route_trip_contract,
            'date_start_contract' => $this->date_start_contract,
            'contract_end_date' => $this->contract_end_date,
            'contract_value' => $this->contract_value,
            'contracting_name' => $this->contracting_name,
            'state_contract' => '0',
            'identification' => $this->identification,
            'contract_document' => $this->contract_document,
            'expedition_identificationcard' => $this->expedition_identificationcard,
            'contracting_phone' => $this->contracting_phone,
            'contracting_direction' => $this->contracting_direction,
            'legal_representative' => $this->legal_representative,
            'passenger_quantity' => $this->passenger_quantity,
            'total_disposition' => $this->total_disposition,
            'quantity_vehicle' => $this->quantity_vehicle,
            'cooperation_contract' => $this->cooperation_contract,
            'entity_name' => $this->entity_name,
            'secure_policy' => $this->secure_policy,
            'tipe_pay' => $this->tipe_pay,
            'contract_signing_date' => $this->contract_signing_date,
            'school_name' => $this->school_name,
            'address_school' => $this->address_school,
            'identification_represent_legal' => $this->identification_legal_representative,
            'legal_representative_expedition_identificationcard' => $this->legal_representative_expedition_identificationcard,
            'identificationcard_represent_legal' => $this->identificationcard_represent_legal,
            'trip_from' => $this->trip_from,
            'trip_to' => $this->trip_to,
            'place_of_origin' => $this->place_of_origin,
            'destination_place' => $this->destination_place,
            'return_place' => $this->return_place,
            'identification_representative_group' => $this->identification_representative_group,
            'identificationcard_representative_group' => $this->identificationcard_representative_group,
            'group_representative_name' => $this->group_representative_name,
            'dateofexpedition_representative_group' => $this->dateofexpedition_representative_group,
            'signed_contract' => '0'
        ]);

        $id = contract::latest('id')->value('id');

        $contractType = DB::table('contract_types')->where('id', $this->type_contract)->value('description_typeContract');

        if ($this->type_contract == 4) {
            DB::table('contract_vehicle_permit')->insert([
                'contract_id' => $id,
                'vehicle_id' => $this->vehicle,
                // 'permit_id' => ""
            ]);
        }

        $this->emit('crud', ['contractnumber' => $this->contract_number], ['process' => 1], ['contractType' => $contractType], ['id' => $id]);
        $this->clear();
    }

    // actualizar un contrato
    public function update()
    {
        if ($this->editContracts->type_contract == 4) {
            DB::table('contract_vehicle_permit')->where('contract_id', $this->editContracts->id)->update(['vehicle_id' => $this->vehicleSelect]);
        }

        $this->editContracts->save();

        $contractType = DB::table('contracts')->join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
        ->where('contracts.id', $this->editContracts->id)->value('description_typeContract');

        $this->emit('crud', ['contractnumber' => $this->editContracts->contract_number], ['process' => 2], ['contractType' => $contractType], ['id' => 0]);

        $this->clear();
        // dd($this->vehicleSelect);
    }

    public function destroy($id)
    {
        $contractnumber = DB::table('contracts')->where('id', $id)->value('contract_number');
        $contractType = DB::table('contracts')->join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
            ->where('contracts.id', $id)->value('description_typeContract');
        // dd($plate);
        contract::destroy($id);

        DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\contract%')->delete();

        // Storage::deleteDirectory('public/STEP/vehicles/Placa_'.$plate);
        $ruta = DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\contract%')->value('directory');
        $newRuta = str_replace('/storage', 'public', $ruta);
        Storage::delete($newRuta);

        $this->emit('crud', ['contractnumber' => $contractnumber], ['process' => 3], ['contractType' => $contractType], ['id' => 0]);
    }

    // cargar los datos del contrato que se van a editar
    public function edit(contract $contract)
    {
        $this->editContracts = $contract;

        $this->descriptionTypeContract = DB::table('contracts')->join('contract_types', 'contract_types.id', '=', 'contracts.type_contract')
        ->where('contracts.id', $this->editContracts->id)->value('description_typeContract');

        $this->vehicleSelect = DB::table('contract_vehicle_permit')->join('contracts', 'contracts.id', '=', 'contract_vehicle_permit.contract_id')
        ->where('contract_vehicle_permit.contract_id', $this->editContracts->id)->value('vehicle_id');

        $this->emit('openModalEdit');
    }

    public function render()
    {

        $contracts = contract::join('contract_types', 'contracts.type_contract', '=', 'contract_types.id')
            ->select('contracts.id', 'description_typeContract', 'state_contract', 'date_start_contract', 'contract_end_date', 'contracting_name', 'contract_value', 'school_name', 'destination_place', 'contract_number')
            ->where('contract_number', 'like', '%' . $this->search . '%')
            ->orwhere('description_typeContract', 'like', '%' . $this->search . '%')
            ->orwhere('state_contract', 'like', '%' . $this->search . '%')
            ->orwhere('date_start_contract', 'like', '%' . $this->search . '%')
            ->orwhere('contract_end_date', 'like', '%' . $this->search . '%')
            ->orwhere('contracting_name', 'like', '%' . $this->search . '%')
            ->orwhere('school_name', 'like', '%' . $this->search . '%')
            ->orwhere('destination_place', 'like', '%' . $this->search . '%')
            ->orwhere('contract_value', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)->get();

        $type_contracts = contractType::all();

        $identifications = identification::all();

        $payment_types = paymentType::all();

        $vehicles = vehicle::all();

        return view('livewire.contracts.manage-contracts', compact('contracts', 'type_contracts', 'identifications', 'payment_types', 'vehicles'));
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

    public function clear()
    {
        $this->reset([

            'contract_number',
            'type_contract',
            'route_trip_contract',
            'date_start_contract',
            'contract_end_date',
            'contract_value',
            'contracting_name',
            'state_contract',
            'identification',
            'contract_document',
            'expedition_identificationcard',
            'contracting_phone',
            'contracting_direction',
            'legal_representative',
            'passenger_quantity',
            'total_disposition',
            'quantity_vehicle',
            'cooperation_contract',
            'entity_name',
            'secure_policy',
            'tipe_pay',
            'contract_signing_date',
            'school_name',
            'address_school',
            'identification_legal_representative',
            'legal_representative_expedition_identificationcard',
            'identificationcard_represent_legal',
            'trip_from',
            'trip_to',
            'place_of_origin',
            'destination_place',
            'return_place',
            'identification_representative_group',
            'identificationcard_representative_group',
            'group_representative_name',
            'dateofexpedition_representative_group',
        ]);
    }

    public function pdf($id)
    {
        return redirect()->route('pdfs.pdf-contracts', ['id' => $id]);

        // return redirect()->route('pdfs.pdf-contracts', ['id' => 77]);
        // return redirect()->route('pdfs.pdf-contracts', ['id' => 73]);
        // return redirect()->route('pdfs.pdf-contracts', ['id' => 70]);
        // return redirect()->route('pdfs.pdf-contracts', ['id' => 74]);
        // return redirect()->route('pdfs.pdf-contracts', ['id' => 69]);
    }
}

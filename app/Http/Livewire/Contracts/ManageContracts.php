<?php

namespace App\Http\Livewire\Contracts;

use App\Models\city;
use App\Models\contract;
use App\Models\contractType;
use App\Models\identification;
use App\Models\paymentType;
use App\Models\relationship;
use App\Models\vehicle;
use App\Models\vehicleClass;
use App\Models\vehicleType;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
// use Karriere\PdfMerge\PdfMerge;
use iio\libmergepdf\Merger;

class ManageContracts extends Component
{
    use WithFileUploads;

    // public function paginationView()
    // {
    //     return 'livewire.tailwind';
    // }

    public $search = "";
    public $sort = 'id';
    public $direction = 'desc';
    public $contract_number, $type_contract, $state_contract, $date_start_contract, $contract_end_date, $contracting_name, $school_name, $contract_value, $route_trip_contract, $contract_document, $expedition_identificationcard,
        $contracting_phone, $contracting_direction, $legal_representative, $passenger_quantity, $total_disposition, $quantity_vehicle, $contract_signing_date, $identificationcard_represent_legal,
        $legal_representative_expedition_identificationcard, $tipe_pay, $identification, $address_school, $secure_policy, $cooperation_contract, $identification_legal_representative, $identification_representative_group, $identificationcard_representative_group,
        $group_representative_name, $dateofexpedition_representative_group, $vehicle, $contract_with, $student_name, $identificationcard_estudent, $grade_student, $family_relationship, $who_receives, $signature_place, $End_day, $start_day, $exit, $arrival, $return,
        $municipality, $plate, $brand, $line, $model, $cylinder_capacity, $legal_bond, $fuel, $vehicle_class, $chassis_number, $ability, $engine_number, $signedContract, $passengers = [],

        $subidadeprueba,$pps,

        $DocNit, $Docrnt, $Docempowerment, $DocResolution, $DocCamaraComercio, $DocRUT, $DocAttachContract;

    public $editContracts = null, $descriptionTypeContract = null, $vehicleSelect = null;
    public $RouteStart = '/public/STEP/contract/',
        $directory = ['colegios', 'Empresas', 'Empresa_Turismo', 'Ocacionales', 'Usuarios_Salud', 'Comvenio_Empresarial', 'Contrato_Vinculacion'],
        $doc = [
            'documentación_contrato_N-', 'Contrato_para_transporte_de_estudiantes_N-', 'Contrato_para_transporte_empresarial_N-', 'Contrato_para_transporte_de_turistas_N-',
            'Contrato_para_un_grupo_específico_de_usuarios_N-', 'Contrato_para_Transporte_de_usuarios_del_servicio_de_salud_N-',
            'convenio_de_colaboracion_empresarial_N-', 'Contrato_de_Vinculación_N-'
        ], $Route, $name, $extension, $documentation = [];

    // protected $listeners = ['pdf'];
    protected $listeners = ['destroy', 'edit', 'passenger'];

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
        // 'editContracts.entity_name'  => 'required',
        'editContracts.secure_policy'  => 'required',
        'editContracts.tipe_pay'  => 'required',
        'editContracts.contract_signing_date'  => 'required',
        'editContracts.school_name'  => 'required',
        'editContracts.address_school'  => 'required',
        'editContracts.identification_represent_legal'  => 'required',
        'editContracts.identificationcard_represent_legal'  => 'required',
        'student_name'  => 'required',
        'identificationcard_estudent'  => 'required',
        'grade_student'  => 'required',
        'family_relationship'  => 'required',
        // 'editContracts.trip_from'  => 'required',
        // 'editContracts.trip_to'  => 'required',
        // 'editContracts.place_of_origin'  => 'required',
        // 'editContracts.destination_place'  => 'required',
        // 'editContracts.return_place'  => 'required',
        'editContracts.identificationcard_representative_group'  => 'required',
        'editContracts.group_representative_name'  => 'required',
        'editContracts.dateofexpedition_representative_group'  => 'required',
        'editContracts.signed_contract'  => 'required',
    ];

    public function passenger($passenger)
    {

        // $this->passengers = $passenger;


        // $mivariable = $this->passengers[1]['documento'];
        // $mivariable = $this->passengers[0][0]['nombreC'];
        // dd($mivariable );
        // $extension = $mivariable->extension();
        // dd($this->passengers );
        // dd($this->pps );
    }

    public function store()
    {

        // dd($this->passengers );

        if ($this->DocNit == null) {
            return $this->emit('crud', ['contractnumber' => ''], ['process' => 4], ['contractType' => ''], ['id' => '']);
        }

        // if ($this->passengers == null) {
        //     return $this->emit('crud', ['contractnumber' => ''], ['process' => 6], ['contractType' => ''], ['id' => '']);
        // }

        if ($this->type_contract == 1 && $this->contract_with == 4) {
            if ($this->DocRUT == null || $this->DocResolution == null || $this->DocCamaraComercio == null) {
                // dd($this->DocRUT, $this->DocResolution, $this->DocCamaraComercio);
                return $this->emit('crud', ['contractnumber' => ''], ['process' => 5], ['contractType' => ''], ['id' => '']);
            }
        } else if ($this->type_contract == 2) {
            if ($this->DocRUT == null || $this->Docempowerment == null || $this->DocCamaraComercio == null) {
                return $this->emit('crud', ['contractnumber' => ''], ['process' => 5], ['contractType' => ''], ['id' => '']);
            }
        } else if ($this->type_contract == 3) {
            if ($this->DocRUT == null || $this->Docrnt == null || $this->DocCamaraComercio == null) {
                return $this->emit('crud', ['contractnumber' => ''], ['process' => 5], ['contractType' => ''], ['id' => '']);
            }
        } else if ($this->type_contract == 5) {
            if ($this->contract_document == 4) {
                return $this->emit('crud', ['contractnumber' => ''], ['process' => 5], ['contractType' => ''], ['id' => '']);
            }
        }
        // dd($this->DocRUT, $this->DocResolution, $this->DocCamaraComercio);

        $this->total_disposition == null ? $this->total_disposition = 'NO' : $this->total_disposition = 'SI';
        // dd($this->total_disposition);

        ($this->DocAttachContract != null) ? $this->signedContract = '2' : $this->signedContract = '1';

        // $this->documentsValidate();

        $this->contract_number = DB::table('contracts')->where('type_contract', $this->type_contract)->orderBy('contract_number', 'DESC')
            ->limit(1)->value('contract_number');
        $this->contract_number = $this->contract_number + 1;

        if ($this->type_contract == 1) {
            $this->secure_policy = 'SEGUROS DEL ESTADO';
        }

        $contract = contract::create([

            'contract_number' => $this->contract_number,
            'type_contract' => $this->type_contract,
            'route_trip_contract' => $this->route_trip_contract,
            'date_start_contract' => $this->date_start_contract,
            'contract_end_date' => $this->contract_end_date,
            'contract_value' => $this->contract_value,
            'contracting_name' => $this->contracting_name,
            'state_contract' => '1',
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
            // 'entity_name' => $this->entity_name,
            'secure_policy' => $this->secure_policy,
            'tipe_pay' => $this->tipe_pay,
            'contract_signing_date' => $this->contract_signing_date,
            'school_name' => $this->school_name,
            'address_school' => $this->address_school,
            'identification_represent_legal' => $this->identification_legal_representative,
            'legal_representative_expedition_identificationcard' => $this->legal_representative_expedition_identificationcard,
            'identificationcard_represent_legal' => $this->identificationcard_represent_legal,
            'student_name' => $this->student_name,
            'identificationcard_estudent' => $this->identificationcard_estudent,
            'grade_student' => $this->grade_student,
            'family_relationship' => $this->family_relationship,
            'signature_place' => $this->signature_place,
            'End_day' => $this->End_day,
            'start_day' => $this->start_day,
            'exit_contract'  => $this->exit,
            'arrival_contract'  => $this->arrival,
            'return_contract'  => $this->return,
            'legal_bond'  => $this->legal_bond,
            'identification_representative_group' => $this->identification_representative_group,
            'identificationcard_representative_group' => $this->identificationcard_representative_group,
            'group_representative_name' => $this->group_representative_name,
            'dateofexpedition_representative_group' => $this->dateofexpedition_representative_group,
            'signed_contract' => $this->signedContract,
            'contract_with' => $this->contract_with,
            'municipality' => $this->municipality
        ]);

        $id = contract::latest('id')->value('id');

        $this->isVehicle($id);

        $contractType = DB::table('contract_types')->where('id', $this->type_contract)->value('description_typeContract');

        $this->contractsPackage($contract,$id);

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
            ->select('contracts.id', 'contract_name', 'state_contract', 'date_start_contract', 'contract_end_date', 'contracting_name', 'contract_value', 'school_name', 'route_trip_contract', 'contract_number')
            ->where('contract_number', 'like', '%' . $this->search . '%')
            ->orwhere('contract_name', 'like', '%' . $this->search . '%')
            ->orwhere('state_contract', 'like', '%' . $this->search . '%')
            ->orwhere('date_start_contract', 'like', '%' . $this->search . '%')
            ->orwhere('contract_end_date', 'like', '%' . $this->search . '%')
            ->orwhere('contracting_name', 'like', '%' . $this->search . '%')
            ->orwhere('school_name', 'like', '%' . $this->search . '%')
            ->orwhere('route_trip_contract', 'like', '%' . $this->search . '%')
            ->orwhere('contract_value', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)->paginate(5);

        $type_contracts = contractType::all();

        $cities = city::all();

        $identifications = identification::all();

        $payment_types = paymentType::all();

        $vehicles = vehicle::all()->whereIn('state_vehicle', [2, 4]);

        $relationships = relationship::all();

        $vehicle_types = vehicleType::pluck('vehicle_type_name', 'id');

        $vehicle_classes = vehicleClass::pluck('vehicle_class_description', 'id');

        return view('livewire.contracts.manage-contracts', compact('contracts', 'type_contracts', 'identifications', 'payment_types', 'vehicles', 'relationships', 'cities', 'vehicle_types', 'vehicle_classes'));
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
            'secure_policy',
            'tipe_pay',
            'contract_signing_date',
            'school_name',
            'address_school',
            'identification_legal_representative',
            'legal_representative_expedition_identificationcard',
            'identificationcard_represent_legal',
            'student_name',
            'identificationcard_estudent',
            'grade_student',
            'family_relationship',
            'identification_representative_group',
            'identificationcard_representative_group',
            'group_representative_name',
            'dateofexpedition_representative_group',
            'Docempowerment',
            'DocRUT',
            'DocResolution',
            'DocCamaraComercio',
            'Docrnt',
        ]);
    }

    public function isVehicle($id)
    {

        if ($this->type_contract == 7) {

            $plate_vehicle = strtoupper($this->plate);

            $vehicle =  Vehicle::create([
                'plate_vehicle' => $plate_vehicle,
                'brand_vehicle' => $this->brand,
                'model_vehicle' => $this->model,
                'cylinder_vehicle' => $this->cylinder_capacity,
                'infrastructure_vehicle' => $this->fuel,
                'vehicle_type' => $this->vehicle_class,
                'vehicle_chassis_number' => $this->chassis_number,
                'engine_number' => $this->engine_number,
                'number_passenger' => $this->ability,
                'service' => $this->line,
                'admission_date' => $this->date_start_contract,
                'binding_contract' => '1'

            ]);

            $id_vehicle = Vehicle::latest('id')->value('id');

            $this->vehicle = $id_vehicle;
        }

        if ($this->type_contract == 4 || $this->type_contract == 7) {
            DB::table('contract_vehicle_permit')->insert([
                'contract_id' => $id,
                'vehicle_id' => $this->vehicle,
                // 'permit_id' => ""
            ]);
        }
    }

    public function insertDocument($contractClass, $ParamDoc, $contract_number, $directory)
    {

        $this->extension = $ParamDoc->extension();
        $this->name = $contractClass . $contract_number . '.' . $this->extension;
        $url = $ParamDoc->storeAs($this->RouteStart . $directory, $this->name);
        $this->Route = Storage::url($url);
        $this->Route = str_replace('/storage', 'storage', $this->Route);
    }

    // con este metodo empaquetaremos la documentación de los archivos pdf de los contratos 
    public function contractsPackage($contract,$id)
    {

        $this->documentation = [
            $this->DocNit, $this->Docrnt, $this->Docempowerment, $this->DocResolution, $this->DocCamaraComercio, $this->DocRUT, $this->DocAttachContract
        ];

        $docR = [];
        $numDirectory = $this->type_contract - 1;
        $only = true;

        $agree = new Merger;

        switch ($this->type_contract) {
                // Colegios
            case '1':

                if ($this->contract_with == 4) {
                    if ($this->DocAttachContract != null) {
                        $docR = [6, 0, 3, 4, 5];
                    } else {
                        $docR = [0, 3, 4, 5];
                    }
                } else {
                    if ($this->DocAttachContract != null) {
                        $docR = [6, 0];
                    } else {
                        $only = false;
                        $this->insertDocument($this->doc[0], $this->DocNit, $this->contract_number, $this->directory[$numDirectory]);

                        $contract->documents()->create([
                            'document_name' => $this->name,
                            'extension' => $this->extension,
                            'directory' => $this->Route,
                        ]);
                    }
                }
                break;
                // Empresas
            case '2':
                if ($this->DocAttachContract != null) {
                    $docR = [6, 0, 2, 4, 5];
                } else {
                    $docR = [0, 2, 4, 5];
                }

                break;
                // Empresa Turismo
            case '3':
                $docR = [0, 1, 4, 5];
                break;
                // Ocacionales
            case '4':
                if ($this->DocAttachContract != null) {
                    $docR = [0, 5];
                } else {
                    $only = false;
                    $this->insertDocument($this->doc[0], $this->DocNit, $this->contract_number, $this->directory[$numDirectory]);

                    $contract->documents()->create([
                        'document_name' => $this->name,
                        'extension' => $this->extension,
                        'directory' => $this->Route,
                    ]);
                }
                break;
                // Usuarios Salud
            case '5':

                if ($this->DocRUT != null) {
                    $docR = [0, 5];
                }
                break;
                // Comveni Empresarial
            case '6':
                $docR = [0, 5];
                break;
                // Contrato de Vinculación
            case '7':
                $only = false;
                $this->insertDocument($this->doc[0], $this->DocNit, $this->contract_number, $this->directory[$numDirectory]);

                $contract->documents()->create([
                    'document_name' => $this->name,
                    'extension' => $this->extension,
                    'directory' => $this->Route,
                ]);
                break;

            default:

                break;
        }

        if ($only) {

            for ($i = 0; $i < count($docR); $i++) {
                $agree->addFile($this->documentation[$docR[$i]]->getRealPath());
            }

            $output = $agree->merge();

            if ($this->DocAttachContract != null) {
                $fileName = $this->doc[$this->type_contract] . $this->contract_number . '.pdf';

                DB::table('contracts')->where('id', $id)->update(['signed_contract' => 2]);                
            } else {
                $fileName = $this->doc[0] . $this->contract_number . '.pdf';
            }

            $url = 'storage/STEP/contract/' . $this->directory[$numDirectory] .'/'. $fileName;

            $bytesEscritos = file_put_contents($url, $output);

            if ($bytesEscritos > 0) {
                $contract->documents()->create([
                    'document_name' => $fileName,
                    'extension' => '.pdf',
                    'directory' => $url,
                ]);
            }

            // dd($bytesEscritos, $url);
        }
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

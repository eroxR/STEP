<?php

namespace App\Http\Livewire\Vehicles;

use App\Models\brakeTypes;
use App\Models\dimensionRims;
use App\Models\document;
use App\Models\driver;
use App\Models\User;
use App\Models\vehicle;
use App\Models\vehicleClass;
use App\Models\vehicleType;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class ManageVehicles extends Component
{
    use WithFileUploads;

    public $search = "";
    public $sort = 'id';
    public $direction = 'desc';
    public $name, $extension, $Route, $Doc = [], $DocFecha = [], $RouteStart = 'public/STEP/vehicles/Placa_', $editVehicles = null,
        $docCivilContractual, $docExtracontractual, $docPreventive, $docCardOperation, $docTechnomechanical, $docSecureEndDate,
        $certificate = [
            'Tarjeta_de_propiedad_Placa_', 'Certificado_SOAT_Placa_', 'Certificado_TécnicoMecánica_Placa_', 'Certificado_Tarjeta_de_Operación_Placa_',
            'Certificado_Preventiva_Placa_', 'Certificado_Extracontractual_Placa_', 'Certificado_civil_contractual_Placa_'
        ];
    public $vehicle_type, $plate_vehicle, $model_vehicle, $brand_vehicle, $vehicle_chassis_number, $color_vehicle, $side_vehicle, $infrastructure_vehicle,
        $engine_number, $property_card_number, $dimension_rims, $owner_vehicle, $driver_id, $service, $card_operation,
        $internal_external_owner_type, $admission_date, $vehicle_pickup_date, $cylinder_vehicle, $number_passenger, $front_suspension, $rear_suspension,
        $rear_brake_type, $front_brake_type, $type_direction, $vahicle_photo_path,

        $technomechanical_end_date, $secure_end_date, $expiration_card_operation, $expiration_preventive, $certificate_extracontractual, $civil_contractual,

        $DocPropertyCardNumber, $DocNumberTechnomechanicalAccreditation, $DocNumberAccreditationSoat, $DocCardOperation, $DocPreventive, $DocCertificateExtracontractual,
        $DocCivilContractual;

    protected $listeners = ['destroy', 'edit', 'documentUpdate', 'reactivado', 'searchImg'];

    protected $rules = [

        'editVehicles.plate_vehicle' => 'required',
        'editVehicles.vehicle_type' => 'required',
        'editVehicles.brand_vehicle' => 'required',
        'editVehicles.model_vehicle' => 'required',
        'editVehicles.vehicle_chassis_number' => 'required',
        'editVehicles.property_card_number' => 'required',
        'editVehicles.cylinder_vehicle' => 'required',
        'editVehicles.side_vehicle' => 'required',
        'editVehicles.owner_vehicle' => 'required',
        'editVehicles.driver_id' => 'required',
        'editVehicles.number_passenger' => 'required',
        'editVehicles.secure_end_date' => 'required',
        // 'editVehicles.number_accreditation_soat' => 'required',
        'editVehicles.technomechanical_end_date' => 'required',
        // 'editVehicles.number_technomechanical_accreditation' => 'required',
        'editVehicles.certificate_extracontractual' => 'required',
        'editVehicles.civil_contractual' => 'required',
        'editVehicles.internal_external_owner_type' => 'required',
        'editVehicles.infrastructure_vehicle' => 'required',
        'editVehicles.state_vehicle' => 'required',
        'editVehicles.card_operation' => 'required',
        'editVehicles.expiration_card_operation' => 'required',
        'editVehicles.expiration_preventive' => 'required',
        'editVehicles.admission_date' => 'required',
        'editVehicles.vehicle_pickup_date' => 'required',
        'editVehicles.engine_number' => 'required',
        'editVehicles.service' => 'required',
        'editVehicles.color_vehicle' => 'required',
        // 'editVehicles.quantity_valves' => 'required',
        // 'editVehicles.number_cylinders' => 'required',
        // 'editVehicles.turbo' => 'required',
        // 'editVehicles.orientation' => 'required',
        'editVehicles.type_direction' => 'required',
        // 'editVehicles.transmission_type' => 'required',
        // 'editVehicles.number_speeds' => 'required',
        // 'editVehicles.tire_number' => 'required',
        // 'editVehicles.type_bearing' => 'required',
        'editVehicles.front_suspension' => 'required',
        'editVehicles.rear_suspension' => 'required',
        'editVehicles.dimension_rims' => 'required',
        // 'editVehicles.material_rims' => 'required',
        'editVehicles.rear_brake_type' => 'required',
        'editVehicles.front_brake_type' => 'required',
        // 'editVehicles.number_windows' => 'required',
    ];

    // registrar un nuevo vehiculo con sus documentos
    public function store()
    {
        $this->property_card_number = strtoupper($this->property_card_number);
        $plate_vehicle = strtoupper($this->plate_vehicle);

        $plateExits = DB::table('vehicles')->where('plate_vehicle', $plate_vehicle)->value('plate_vehicle');
        $sideExits = DB::table('vehicles')->where('side_vehicle', $this->side_vehicle)->value('side_vehicle');

        if (
            $this->property_card_number == '' || $this->DocPropertyCardNumber == '' || $this->secure_end_date == '' || $this->DocNumberAccreditationSoat == '' || $this->DocNumberTechnomechanicalAccreditation == '' ||
            $this->technomechanical_end_date == '' || $this->card_operation || $this->expiration_card_operation == '' || $this->DocCardOperation == '' || $this->expiration_preventive == '' ||
            $this->DocPreventive == '' || $this->certificate_extracontractual == '' || $this->DocCertificateExtracontractual == '' || $this->civil_contractual == '' || $this->DocCivilContractual == ''
        ) {
            $stateVehicle = 1;
        } else {
            $stateVehicle = 2;
        }

        if ($plateExits > 0) {
            $bindingContract = DB::table('vehicles')->where('plate_vehicle', $plate_vehicle)->value('binding_contract');

            if ($bindingContract == 0 || $bindingContract == null) {
                return $this->emit('crud', ['plate' => $plate_vehicle], ['process' => 4]);
            } else if ($sideExits > 0) {
                return $this->emit('crud', ['plate' => $sideExits], ['process' => 5]);
            } else {

                $profileExtension = $this->vahicle_photo_path->extension();
                $nameprofile = 'profile_vehicle_placa_' . $plate_vehicle . '.' . $profileExtension;
                $urlprofile = $this->vahicle_photo_path->storeAs($this->RouteStart . $plate_vehicle, $nameprofile);
                $url = Storage::url($urlprofile);

                DB::table('vehicles')->where('plate_vehicle', $plate_vehicle)->update([
                    'property_card_number' => $this->property_card_number,
                    'side_vehicle' => $this->side_vehicle,
                    'owner_vehicle' => $this->owner_vehicle,
                    'driver_id' => $this->driver_id,
                    'secure_end_date' => $this->secure_end_date,
                    'technomechanical_end_date' => $this->technomechanical_end_date,
                    'certificate_extracontractual' => $this->certificate_extracontractual,
                    'civil_contractual' => $this->civil_contractual,
                    'internal_external_owner_type' => $this->internal_external_owner_type,
                    'state_vehicle' => $stateVehicle,
                    'card_operation' => $this->card_operation,
                    'expiration_card_operation' => $this->expiration_card_operation,
                    'expiration_preventive' => $this->expiration_preventive,
                    'vehicle_pickup_date' => $this->vehicle_pickup_date,
                    'color_vehicle' => $this->color_vehicle,
                    'type_direction' => $this->type_direction,
                    'front_suspension' => $this->front_suspension,
                    'rear_suspension' => $this->rear_suspension,
                    'dimension_rims' => $this->dimension_rims,
                    'rear_brake_type' => $this->rear_brake_type,
                    'front_brake_type' => $this->front_brake_type,
                    'service' => 'Público',
                    'vahicle_photo_path' => $url
                ]);
            }
        } elseif ($sideExits > 0) {
            return $this->emit('crud', ['plate' => $sideExits], ['process' => 5]);
        }

        if ($plateExits == null || $plateExits == 0) {
            // dd($plateExits);

            $profileExtension = $this->vahicle_photo_path->extension();
            $nameprofile = 'profile_vehicle_placa_' . $plate_vehicle . '.' . $profileExtension;
            $urlprofile = $this->vahicle_photo_path->storeAs($this->RouteStart . $plate_vehicle, $nameprofile);
            $url = Storage::url($urlprofile);

            // dd($url);

            $vehicle =  Vehicle::create([
                'plate_vehicle' => $plate_vehicle,
                'brand_vehicle' => $this->brand_vehicle,
                'model_vehicle' => $this->model_vehicle,
                'vehicle_chassis_number' => $this->vehicle_chassis_number,
                'property_card_number' => $this->property_card_number,
                'cylinder_vehicle' => $this->cylinder_vehicle,
                'vehicle_type' => $this->vehicle_type,
                'side_vehicle' => $this->side_vehicle,
                'owner_vehicle' => $this->owner_vehicle,
                'driver_id' => $this->driver_id,
                'number_passenger' => $this->number_passenger,
                'secure_end_date' => $this->secure_end_date,
                'technomechanical_end_date' => $this->technomechanical_end_date,
                'certificate_extracontractual' => $this->certificate_extracontractual,
                'civil_contractual' => $this->civil_contractual,
                'internal_external_owner_type' => $this->internal_external_owner_type,
                'infrastructure_vehicle' => $this->infrastructure_vehicle,
                'state_vehicle' => $stateVehicle,
                'card_operation' => $this->card_operation,
                'expiration_card_operation' => $this->expiration_card_operation,
                'expiration_preventive' => $this->expiration_preventive,
                'admission_date' => $this->admission_date,
                'vehicle_pickup_date' => $this->vehicle_pickup_date,
                'engine_number' => $this->engine_number,
                'service' => 'Público',
                'color_vehicle' => $this->color_vehicle,
                'type_direction' => $this->type_direction,
                'front_suspension' => $this->front_suspension,
                'rear_suspension' => $this->rear_suspension,
                'dimension_rims' => $this->dimension_rims,
                'rear_brake_type' => $this->rear_brake_type,
                'front_brake_type' => $this->front_brake_type,
                'vahicle_photo_path' => $url

            ]);
        }
        

        $this->Doc = [
            $this->DocPropertyCardNumber, $this->DocNumberAccreditationSoat, $this->DocNumberTechnomechanicalAccreditation,
            $this->DocCardOperation, $this->DocPreventive, $this->DocCertificateExtracontractual, $this->DocCivilContractual
        ];

        $this->DocFecha = [
            $this->property_card_number, $this->secure_end_date, $this->technomechanical_end_date, $this->expiration_card_operation,
            $this->expiration_preventive, $this->certificate_extracontractual, $this->civil_contractual
        ];

        $id = DB::table('vehicles')->where('plate_vehicle', $plate_vehicle)->value('id');

        for ($i = 0; $i < count($this->Doc); $i++) {

            if ($this->Doc[$i] != "" || $this->Doc[$i] != 0) {

                $this->insertDocument($this->certificate[$i], $this->Doc[$i], $this->DocFecha[$i]);

                if ($plateExits > 0) {

                    DB::table('documents')->insert([
                        'documentable_id' => $id,
                        'document_name' => $this->name,
                        'extension' => $this->extension,
                        'directory' => $this->Route,
                        'documentable_Type' => 'App\Models\vehicle',
                    ]);
                } else {

                    $vehicle->documents()->create([
                        'document_name' => $this->name,
                        'extension' => $this->extension,
                        'directory' => $this->Route,
                    ]);
                }
            }
        }

        $this->emit('crud', ['plate' => $plate_vehicle], ['process' => 1]);

        $this->clear();
    }

    // actualizar un vehiculo
    public function update()
    {
        $this->editVehicles->save();

        $this->emit('crud', ['plate' => $this->editVehicles->plate_vehicle], ['process' => 2]);
    }

    // actualizar un documento de un vehiculo
    public function documentUpdate($paramText, $documentName)
    {

        $documentName = $documentName[0];

        $ruta = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%' . $documentName . '%')->value('id');

        $paramText = $paramText[0];

        $this->Doc = [
            $this->DocPropertyCardNumber, $this->DocNumberAccreditationSoat, $this->DocNumberTechnomechanicalAccreditation,
            $this->DocCardOperation, $this->DocPreventive, $this->DocCertificateExtracontractual, $this->DocCivilContractual
        ];

        $this->DocFecha = [
            'property_card_number', 'secure_end_date', 'technomechanical_end_date', 'expiration_card_operation',
            'expiration_preventive', 'certificate_extracontractual', 'civil_contractual'
        ];

        // dd($paramText);

        for ($i = 0; $i <= $paramText; $i++) {
            if ($paramText == $i) {
                // dd($this->Doc[$i]);
                $fech = $this->DocFecha[$i];
                $this->insertDocument($this->certificate[$i], $this->Doc[$i], $this->editVehicles->$fech);
            }
        }

        if ($ruta != null) {

            $directory = DB::table('documents')->where('id', $ruta)->value('directory');
            $newRuta = str_replace('/storage', 'public', $directory);
            Storage::delete($newRuta);

            DB::table('documents')->where('id', $ruta)->update(['document_name' => $this->name, 'directory' => $this->Route, 'extension' => $this->extension]);
            // dd('se actualizo');
            $this->emit('documentup', ['up' => 1], ['input' => $paramText]);
        } else {
            DB::table('documents')->insert([
                'documentable_id' => $this->editVehicles->id,
                'document_name' => $this->name,
                'extension' => $this->extension,
                'directory' => $this->Route,
                'documentable_Type' => 'App\Models\vehicle',
            ]);
            // dd('se creo');
            $this->emit('documentup', ['up' => 2], ['input' => $paramText]);
        }

        $this->validateColor();
    }

    // eliminar un vehiculo con todos sus documentos
    public function destroy($id)
    {
        $plate = DB::table('vehicles')->where('id', $id)->value('plate_vehicle');
        // dd($plate);
        DB::table('contract_vehicle_permit')->where('vehicle_id', $id)->delete();
        vehicle::destroy($id);

        // $limitDelete = DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->count();
        // dd($limitDelete);
        // for ($i = 0; $i <= $limitDelete; $i++) {
        //     $ruta = DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->value('directory');
        //     $newRuta = str_replace('/storage', 'public', $ruta);
        //     // dd([$newRuta]);
        //     Storage::delete($newRuta);
        //     DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->limit(1)->delete();
        // }

        DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->delete();

        Storage::deleteDirectory('public/STEP/vehicles/Placa_' . $plate);

        $this->emit('crud', ['plate' => $plate], ['process' => 3]);
    }

    // cargar los datos del vehiculo que se van a editar
    public function edit(vehicle $vehicle)
    {
        $this->editVehicles = $vehicle;

        $this->validateColor();

        $this->emit('openModalEdit');
    }

    // limpiar los componentes que se utilizaron para crear un vehiculo
    public function clear()
    {
        $this->reset([

            'plate_vehicle',
            'brand_vehicle',
            'model_vehicle',
            'vehicle_chassis_number',
            'property_card_number',
            'cylinder_vehicle',
            'vehicle_type',
            'side_vehicle',
            'owner_vehicle',
            'driver_id',
            'number_passenger',
            'secure_end_date',
            // 'number_accreditation_soat',
            'technomechanical_end_date',
            // 'number_technomechanical_accreditation',
            'certificate_extracontractual',
            'civil_contractual',
            'internal_external_owner_type',
            'infrastructure_vehicle',
            // 'state_vehicle',
            'card_operation',
            'expiration_card_operation',
            'expiration_preventive',
            'admission_date',
            'vehicle_pickup_date',
            'engine_number',
            'service',
            'color_vehicle',
            // 'quantity_valves',
            // 'number_cylinders',
            // 'turbo',
            // 'orientation',
            'type_direction',
            // 'transmission_type',
            // 'number_speeds',
            // 'tire_number',
            // 'type_bearing',
            'front_suspension',
            'rear_suspension',
            'dimension_rims',
            // 'material_rims',
            'rear_brake_type',
            'front_brake_type',
            // 'body_serial_number',
            // 'number_windows',
        ]);

        $this->Doc = [];
        $this->DocFecha = [];
    }

    // renderizar la vista con datos como la información de la tabla, etc...
    public function render()
    {
        // $vehicles = vehicle::all();

        $vehicles = vehicle::join('vehicle_types', 'vehicles.vehicle_type', '=', 'vehicle_types.id')
            ->join('vehicle_classes', 'vehicles.infrastructure_vehicle', '=', 'vehicle_classes.id')
            ->join('users', 'vehicles.owner_vehicle', '=', 'users.id')
            ->select(
                'vehicles.id',
                'plate_vehicle',
                'model_vehicle',
                'vehicle_type_name',
                'side_vehicle',
                'vehicle_class_description',
                'secure_end_date',
                'technomechanical_end_date',
                DB::raw('CONCAT(users.firstname," ",users.lastname) As owner'),
                'brand_vehicle',
                'vehicle_chassis_number',
                'property_card_number',
                'cylinder_vehicle',
                'driver_id',
                'number_passenger',
                // 'number_accreditation_soat',
                // 'number_technomechanical_accreditation',
                'certificate_extracontractual',
                'civil_contractual',
                'internal_external_owner_type',
                'infrastructure_vehicle',
                'state_vehicle',
                'card_operation',
                'expiration_card_operation',
                'expiration_preventive',
                'admission_date',
                'vehicle_pickup_date',
                'engine_number',
                'service',
                'color_vehicle',
                // 'quantity_valves',
                // 'number_cylinders',
                // 'turbo',
                // 'orientation',
                'type_direction',
                // 'transmission_type',
                // 'number_speeds',
                // 'tire_number',
                // 'type_bearing',
                'front_suspension',
                'rear_suspension',
                'dimension_rims',
                // 'material_rims',
                'rear_brake_type',
                'front_brake_type',
                // 'number_windows',
            )
            ->where('plate_vehicle', 'like', '%' . $this->search . '%')
            ->orwhere('model_vehicle', 'like', '%' . $this->search . '%')
            ->orwhere('vehicle_type_name', 'like', '%' . $this->search . '%')
            ->orwhere('side_vehicle', 'like', '%' . $this->search . '%')
            ->orwhere('vehicle_class_description', 'like', '%' . $this->search . '%')
            ->orwhere('secure_end_date', 'like', '%' . $this->search . '%')
            ->orwhere('technomechanical_end_date', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)->get();

        $vehicle_types = vehicleType::pluck('vehicle_type_name', 'id');

        $vehicle_classes = vehicleClass::pluck('vehicle_class_description', 'id');

        $braketypes = brakeTypes::pluck('brake_Type_Description', 'id');

        $dimensionRims = dimensionRims::select('id', 'inch', 'type_rims')->get();

        $owners = User::select('id', DB::raw('CONCAT(firstname, " " ,secondname, " " ,lastname, " " ,motherslastname) As owner'))->where('usertype', '4')->get();

        // $conducs = User::select('id', DB::raw('CONCAT(firstname, " " ,secondname, " " ,lastname, " " ,motherslastname) As conduc'))->where('charge', '5')->get();

        $conducs = user::select('id', DB::raw('CONCAT(firstname, " " ,secondname, " " ,lastname, " " ,motherslastname) As conduc'))
            ->where('charge', 5)->get();

        return view('livewire.vehicles.manage-vehicles', compact(
            'vehicles',
            'vehicle_types',
            'vehicle_classes',
            'owners',
            'conducs',
            'braketypes',
            'dimensionRims',
        ));
    }

    // ordenar los datos de acuerdo a un campo de manera descendente o ascendente
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

    // obtener el nombre, la extension y la ruta de un documento/archivo que se esta subiendo,
    // y finaliza subiendo el archivo a la ruta indicada
    public function insertDocument($certificate, $ParamDoc, $ParamFecha)
    {

        if ($this->plate_vehicle != "") {
            $plate_vehicle = strtoupper($this->plate_vehicle);
        } else {
            $plate_vehicle = $this->editVehicles->plate_vehicle;
        }

        $this->extension = $ParamDoc->extension();
        $this->name = $certificate . $plate_vehicle . '_' . $ParamFecha . '.' . $this->extension;
        $url = $ParamDoc->storeAs($this->RouteStart . $plate_vehicle, $this->name);
        $this->Route = Storage::url($url);
    }

    public function validateColor()
    {

        $this->docSecureEndDate = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%SOAT%')->value('id');
        $this->docTechnomechanical = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%Tecnomecanica%')->value('id');
        $this->docCardOperation = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%Tarjeta_de_Operación%')->value('id');
        $this->docPreventive = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%Preventiva%')->value('id');
        $this->docExtracontractual = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%Extracontractual%')->value('id');
        $this->docCivilContractual = DB::table('documents')->where('documentable_id', $this->editVehicles->id)->where('documentable_Type', 'like', '%\vehicle%')->where('document_name', 'like', '%civil_contractual%')->value('id');

        if ($this->docSecureEndDate == null) {
            $this->docSecureEndDate = 0;
        }

        if ($this->docTechnomechanical == null) {
            $this->docTechnomechanical = 0;
        }

        if ($this->docCardOperation == null) {
            $this->docCardOperation = 0;
        }

        if ($this->docPreventive == null) {
            $this->docPreventive = 0;
        }

        if ($this->docExtracontractual == null) {
            $this->docExtracontractual = 0;
        }

        if ($this->docCivilContractual == null) {
            $this->docCivilContractual = 0;
        }

        $this->emit(
            'documentStatus',
            ['docSecureEndDate' => $this->docSecureEndDate],
            ['docTechnomechanical' => $this->docTechnomechanical],
            ['docCardOperation' => $this->docCardOperation],
            ['docPreventive' => $this->docPreventive],
            ['docCivilContractual' => $this->docCivilContractual],
            ['docExtracontractual' => $this->docExtracontractual]
        );
    }

    public function searchImg($id)
    {
        $photo = vehicle::where('id', $id)->value('vahicle_photo_path');
        $this->emit('documentImage', ['file' => $photo]);
    }

    public function reactivado($id)
    {
        dd('si funciona');
    }
}

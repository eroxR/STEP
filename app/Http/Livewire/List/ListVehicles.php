<?php

namespace App\Http\Livewire\List;

use App\Models\brakeTypes;
use App\Models\dimensionRims;
use App\Models\driver;
use App\Models\User;
use App\Models\vehicle;
use App\Models\vehicleClass;
use App\Models\vehicleType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListVehicles extends Component
{
    use WithFileUploads;

    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0;
    public $vehicle, $plate, $paramText, $dateDocument, $fileDocument, $operationDocument, $extension, $name, $Route, $Lists = null, $title, $idbeneficiary;
    public $certificate = [
            'Tarjeta_de_propiedad_Placa_', 'Certificado_SOAT_Placa_', 'Certificado_TécnicoMecánica_Placa_', 'Certificado_Tarjeta_de_Operación_Placa_',
            'Certificado_Preventiva_Placa_', 'Certificado_Extracontractual_Placa_', 'Certificado_civil_contractual_Placa_'
        ],
        $colum = [
            'property_card_number', 'secure_end_date', 'technomechanical_end_date', 'expiration_card_operation', 'expiration_preventive',
            'certificate_extracontractual', 'civil_contractual'

        ],
        $columname = [
            'Tarjeta de Propiedad', 'Seguro Obligatorio SOAT', 'Técnico Mecánica', 'Tarjeta de Operación', 'Preventiva', 'Extracontractual', 'Civil Contractual'

        ],
        $ownerType = ['EXTERNO', 'INTERNO'],
        $state = ['Inhabilitado', 'Habilitado', 'Inactivo', 'Pendiente'],
        $suspension = ['Suspensión McPherson', 'Suspensión de doble horquilla', 'Suspensión de eje rígido'],
        $typeDirection = ['mecánica', 'hidráulica', 'eléctrica'];

    protected $listeners = ['Historicos', 'expiration'];

    public function render()
    {

        $vehicles = DB::table('vehicles')
            ->where('plate_vehicle', 'like', '%' . $this->search . '%')
            ->orderBy('vehicles.id', $this->direction)
            ->get();
        $listDrivers = driver::all();

        $this->ide != (0) ? $vehiclesSelected = DB::table('vehicles')
            ->where('vehicles.id', $this->ide)->get()
            : $vehiclesSelected = DB::table('vehicles')
            ->orderBy('vehicles.id', 'desc')
            ->limit(1)->get();

        // $identifitations = identification::pluck('description_identification', 'id');


        $linked = User::select('id', 'firstname', 'secondname', 'lastname', 'motherslastname')->get();
        $drives = User::select('id', 'firstname', 'secondname', 'lastname', 'motherslastname')
            ->where('charge', 5)->get();
        $vehicle_types = vehicleType::pluck('vehicle_type_name', 'id');
        $vehicle_classes = vehicleClass::pluck('vehicle_class_description', 'id');
        $braketypes = brakeTypes::pluck('brake_Type_Description', 'id');
        $dimensionRims = dimensionRims::select('id', 'inch', 'type_rims')->get();

        $totals = vehicle::count();
        $inhabilitado = vehicle::where('state_vehicle', 1)->count('id');
        $habilitado = vehicle::where('state_vehicle', 2)->count('id');
        $inactivo = vehicle::where('state_vehicle', 3)->count('id');

        $hoy = Carbon::now();

        return view('livewire.list.list-vehicles', compact(
            'vehicles',
            'listDrivers',
            'vehiclesSelected',
            'drives',
            'linked',
            'vehicle_types',
            'vehicle_classes',
            'dimensionRims',
            'braketypes',
            'hoy',
            'totals',
            'inhabilitado',
            'habilitado',
            'inactivo'
        ));
    }



    public function Historicos($id, $document)
    {
        $id = $id[0];
        $document = $document[0];

        $this->Lists = DB::table('documents')
            ->where('documentable_id', $id)
            ->where('document_name', 'like', '%' . $this->certificate[$document] . '%')
            ->orderBy('id', 'desc')->get();

        $this->title = $this->columname[$document];
        // dd($this->Lists);
        $this->emit('openModalHistorico');
    }

    public function updateDocumentation()
    {


        if (is_null($this->dateDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }

        if (is_null($this->fileDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }

        if ($this->paramText == 3) {
            if (is_null($this->operationDocument)) {
                return $this->emit('newDocument', ['exit' => 5]);
            }
        }

        $hoy = Carbon::now();

        if ($this->dateDocument <= $hoy) {
            return $this->emit('newDocument', ['exit' => 2]);
        }

        if ($this->paramText == 3) {
            $operationCard = vehicle::where('id', $this->vehicle)->value('card_operation');
            // dd( $operationCard);
            if ($this->operationDocument == $operationCard) {
                return $this->emit('newDocument', ['exit' => 5]);
            }
        }

        // validar que la fecha no sea anterior, y realizar la subida del archivo
        $newState = vehicle::where('id', $this->vehicle)->value($this->colum[$this->paramText]);
        if ($this->dateDocument <= $newState) {
            return $this->emit('newDocument', ['exit' => 3]);
        }
        DB::table('vehicles')->where('id', $this->vehicle)->update([$this->colum[$this->paramText] => $this->dateDocument]);

        if ($this->paramText == 3) {
            DB::table('vehicles')->where('id', $this->vehicle)->update(['card_operation' => $this->operationDocument]);
        }

        $this->extension = $this->fileDocument->extension();
        $this->name = $this->certificate[$this->paramText] . $this->plate . '_' . $this->dateDocument . '.' . $this->extension;
        $url = $this->fileDocument->storeAs('public/STEP/vehicles/Placa_' . $this->plate, $this->name);
        $this->Route = Storage::url($url);

        DB::table('documents')->insert([
            'documentable_id' => $this->vehicle,
            'document_name' => $this->name,
            'extension' => $this->extension,
            'directory' => $this->Route,
            'documentable_Type' => 'App\Models\vehicle',
        ]);

        $a = 99;
        $state = 100;

        for ($i = 0; $i < count($this->certificate); $i++) {

            $newState = vehicle::where('id', $this->vehicle)->value($this->colum[$i]);

            if ($newState < $hoy) {
                $a = 100;
            }
        }

        if ($a != 100) {
            $state = $a;
        }

        // dd($state);
        if ($state == 99) {
            DB::table('vehicles')->where('id', $this->vehicle)->update(['state_vehicle' => '2']);
        } else {
            DB::table('vehicles')->where('id', $this->vehicle)->update(['state_vehicle' => '1']);
        }

        $exit = 1;
        // dd($this->fileDocument, $this->dateDocument);
        $this->emit('newDocument', ['exit' => $exit]);

        $this->clear();
    }

    public function order()
    {

        if ($this->direction == 'asc') {
            $this->direction = 'desc';
        } else {
            $this->direction = 'asc';
        }
    }

    public function expiration()
    {
        $this->emit('warning');
    }

    // limpiar los componentes que se utilizaron para crear un vehiculo
    public function clear()
    {
        $this->reset([
            'dateDocument',
            'fileDocument',
            'operationDocument'
        ]);
    }
}

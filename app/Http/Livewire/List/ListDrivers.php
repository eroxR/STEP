<?php

namespace App\Http\Livewire\List;

use App\Models\arl;
use App\Models\bloodType;
use App\Models\bonding;
use App\Models\city;
use App\Models\compensationBox;
use App\Models\country;
use App\Models\driver;
use App\Models\eps;
use App\Models\identification;
use App\Models\layoffs;
use App\Models\licenseCategory;
use App\Models\maritalStatus;
use App\Models\pension;
use App\Models\permit;
use App\Models\Province;
use App\Models\relationship;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListDrivers extends Component
{
    use WithFileUploads;

    public $filtre = 0, $direction = 'desc', $search = '', $ide = 0;
    public $user, $identificationcard, $paramText, $dateDocument, $fileDocument, $extension, $name, $Route, $Lists = null, $title;
    public $certificate = [
            'Certificado_de_Licencia_usuario_', 'Certificado_drogas_alchoolemia_usuario_', 'Certificado_Consultas_SIMIT_usuario_', 'Certificado_Examen_Conduccion_usuario_',
            'Certificado_Norma_Transporte_terrestre_automotor_usuario_', 'Certificado_Normas_Transito_usuario_', 'Certificado_Tips_normativos_usuario_', 'Certificado_Metodos_Conduccion_usuario_',
            'Certificado_Manejo_Defensivo_usuario_', 'Certificado_Distracciones_usuario_', 'Certificado_Primeros_Auxilios_usuario_', 'Certificado_Primero_Respondiente_usuario_',
            'Certificado_Cinco_Sentidos_Conduccion_usuario_', 'Certificado_Seguridad_activa_pasiva_vehiculo_usuario_', 'Certificado_Seguridad_Vial_usuario_',
            'Certificado_Eps_usuario_', 'Certificado_Pension_usuario_', 'Certificado_Cesantias_usuario_', 'Certificado_Arl_usuario_', 'Certificado_Caja_Compensación_usuario_'
        ],
        $colum = [
            'license_expiration', 'certificate_drugs_alchoolemia', 'SIMIT_queries', 'driving_exam',
            'Norm_Overland_Transportation_Automotive', 'Rules_Transit', 'Normative_Tips', 'Driving_Methods',
            'Defensive_driving', 'distractions', 'First_aid', 'First_Responder',
            'five_senses_driving', 'Active_Passive_Security_vehicle', 'Road_safety', 'date_eps', 'date_pension',
            'date_layoffs', 'arl_date', 'date_compensationbox'

        ],
        $columname = [
            'licencia', 'Drogas y alchoolemia', 'Consultas SIMIT', 'Examen de Conduccion',
            'Norma Transporte terrestre automotor', 'Normas de Transito', 'Tips Normativos', 'Metodos de Conduccion',
            'Manejo Defensivo', 'Distracciones', 'Primeros Auxilios', 'Primero Respondiente',
            'Cinco Sentidos de la Conduccion', 'Seguridad Activa y Pasiva del Vehiculo', 'Seguridad Vial', 'Eps', 'Pension',
            'Cesantias', 'Arl', 'Caja Compensacion'

        ];

    protected $listeners = ['Historicos', 'expiration'];

    public function render()
    {
        $drivers = DB::table('users')
            ->join('drivers', 'drivers.user_id', 'users.id')
            ->where('charge', 5)
            ->where('firstname', 'like', '%' . $this->search . '%')
            ->orderBy('users.id', $this->direction)
            ->get();
        $listDrivers = driver::all();

        $this->ide != (0) ? $driversSelected = DB::table('users')
            ->join('drivers', 'drivers.user_id', 'users.id')
            ->where('users.id', $this->ide)->get()
            : $driversSelected = DB::table('users')
            ->join('drivers', 'drivers.user_id', 'users.id')
            ->where('charge', 5)->orderBy('users.id', 'desc')
            ->limit(1)->get();

        $identifitations = identification::pluck('description_identification', 'id');

        $cities = city::pluck('city_name', 'id');
        $provinces = Province::pluck('department_name', 'id');
        $countries = country::pluck('country_name', 'id');
        $eps = eps::pluck('description_eps', 'id');
        $alrs = arl::pluck('description_arl', 'id');
        $layoffs = layoffs::pluck('description_layoffs', 'id');
        $pensions = pension::pluck('description_pension', 'id');
        $compensationboxes = compensationBox::pluck('description_compensationbox', 'id');
        $bloodTypes = bloodType::pluck('blood_type_description', 'id');
        $relationships = relationship::pluck('description_relationship', 'id');
        $maritalStatuses = maritalStatus::pluck('description_maritalstatus', 'id');
        $bondings = bonding::pluck('bonding_type_description', 'id');
        $licenseCategories = licenseCategory::pluck('code_licenseCategory', 'id');
        $linked = User::select('id', 'firstname', 'secondname', 'lastname', 'motherslastname')
            ->where('usertype', 4)->get();

        $hoy = Carbon::now();

        return view('livewire.list.list-drivers', compact(
            'drivers',
            'listDrivers',
            'driversSelected',
            'identifitations',
            'cities',
            'provinces',
            'countries',
            'eps',
            'alrs',
            'layoffs',
            'pensions',
            'compensationboxes',
            'bloodTypes',
            'relationships',
            'linked',
            'hoy',
            'maritalStatuses',
            'bondings',
            'licenseCategories'
        ));
    }

    public function order()
    {

        if ($this->direction == 'asc') {
            $this->direction = 'desc';
        } else {
            $this->direction = 'asc';
        }
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

        if ( is_null($this->dateDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }
        if (is_null($this->fileDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }

        $hoy = Carbon::now();

        $exit = 1;

        if ($this->paramText > 14) {
            $newState = DB::table('users')->where('id', $this->user)->value($this->colum[$this->paramText]);
            if ($this->dateDocument <= $hoy) {
                return $this->emit('newDocument', ['exit' => 2]);
            } elseif ($this->dateDocument <= $newState) {
                return $this->emit('newDocument', ['exit' => 3]);
            }
            DB::table('users')->where('id', $this->user)->update([$this->colum[$this->paramText] => $this->dateDocument]);
        } else {
            $newState = DB::table('drivers')->where('user_id', $this->user)->value($this->colum[$this->paramText]);
            if ($this->dateDocument <= $hoy) {
                return $this->emit('newDocument', ['exit' => 2]);
            } elseif ($this->dateDocument <= $newState) {
                return $this->emit('newDocument', ['exit' => 3]);
            }
            DB::table('drivers')->where('user_id', $this->user)->update([$this->colum[$this->paramText] => $this->dateDocument]);
        }

        $this->extension = $this->fileDocument->extension();
        $this->name = $this->certificate[$this->paramText] . $this->identificationcard . '_' . $this->dateDocument . '.' . $this->extension;
        $url = $this->fileDocument->storeAs('public/STEP/users/Ident_' . $this->identificationcard, $this->name);
        $this->Route = Storage::url($url);

        DB::table('documents')->insert([
            'documentable_id' => $this->user,
            'document_name' => $this->name,
            'extension' => $this->extension,
            'directory' => $this->Route,
            'documentable_Type' => 'App\Models\User',
        ]);


        for ($i = 0; $i <= 20; $i++) {

            if ($i >= 1 && $i <= 14) {

                $newState = DB::table('drivers')
                    ->where('user_id', $this->user)
                    ->value($this->colum[$i]);

                if ($newState < $hoy) {
                    $i = 21;
                }

                if ($i == 14) {
                    $i = 15;
                }
            }

            if ($i >= 15 && $i <= 19) {

                $newState = DB::table('users')
                    ->where('id', $this->user)
                    ->value($this->colum[$i]);

                if ($newState < $hoy) {
                    $i = 21;
                }
            }

            if ($i == 20) {
                DB::table('drivers')->where('user_id', $this->user)->update(['driver_status' => '1']);
            }
        }

        // dd($this->fileDocument, $this->dateDocument);
        $this->emit('newDocument', ['exit' => $exit]);
    }

    public function expiration()
    {
        $this->emit('warning');
    }
}

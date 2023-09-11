<?php

namespace App\Http\Livewire\List;

use App\Models\arl;
use App\Models\beneficiary;
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
    public $user, $identificationcard, $paramText, $dateDocument, $fileDocument, $extension, $name, $Route, $Lists = null, $title, $idbeneficiary;
    public $certificate = [
            'Certificado_de_Licencia_de_Conducción_usuario_', 'Certificado_Drogas_Alchoolemia_usuario_', 'Certificado_Consultas_SIMIT_usuario_', 'Certificado_Psicosensométrico_',
            'Certificado_Normas_Transito_usuario_', 'Certificado_Manejo_Defensivo_usuario_', 'Certificado_Primeros_Auxilios_usuario_', 'Certificado_Seguridad_Vial_usuario_',
            'Certificado_Eps_usuario_', 'Certificado_Pension_usuario_', 'Certificado_Cesantias_usuario_', 'Certificado_Arl_usuario_', 'Certificado_Caja_Compensación_usuario_',
            'Certificado_de_Estudio_Beneficiario_usuario_'
        ],
        $colum = [
            'license_expiration', 'certificate_drugs_alchoolemia', 'SIMIT_queries', 'psicosensometrico', 'Rules_Transit', 'Defensive_driving', 'First_aid', 'Road_safety',
            'date_eps', 'date_pension', 'date_layoffs', 'arl_date', 'date_compensationbox'

        ],
        $columname = [
            'licencia', 'Drogas y alchoolemia', 'Consultas SIMIT', 'psicosensometrico', 'Normas de Transito', 'Manejo Defensivo', 'Primeros Auxilios',
            'Seguridad Vial', 'Eps', 'Pension', 'Cesantias', 'Arl', 'Caja Compensacion', 'Beneficiario'

        ],
        $beneficiaryType = ['Adulto mayor', 'Conyugue', 'Hijo o Hijastro'],
        $state = ['Inhabilitado', 'Habilitado'];

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
        $beneficiaries = beneficiary::select('id', 'full_name', 'document', 'beneficiaryType', 'user_id')->get();

        $totals = driver::count();
        $inhabilitado = driver::where('driver_status', 1)->count('id');
        $habilitado = driver::where('driver_status', 2)->count('id');

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
            'licenseCategories',
            'beneficiaries',
            'totals',
            'inhabilitado',
            'habilitado'
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

    public function Historicos($id, $document, $beneficiary)
    {

        $id = $id[0];
        $document = $document[0];
        $beneficiary = $beneficiary[0];

        if ($beneficiary > 0 || $beneficiary != null) {

            $doc = User::where('id', $id)->value('identificationcard');

            $beneficiaryDoc = $doc . '_' . $beneficiary . '.pdf';

            $this->Lists = DB::table('documents')
                ->where('documentable_id', $id)
                ->where('document_name', 'like', '%' . $beneficiaryDoc)
                ->orderBy('id', 'desc')->get();

            // dd($this->Lists);
        } else {
            $this->Lists = DB::table('documents')
                ->where('documentable_id', $id)
                ->where('document_name', 'like', '%' . $this->certificate[$document] . '%')
                ->orderBy('id', 'desc')->get();
        }

        $this->title = $this->columname[$document];
        // dd($this->Lists);
        $this->emit('openModalHistorico');
    }

    public function updateDocumentation()
    {


        if ($this->paramText != 13) {
            if (is_null($this->dateDocument)) {
                return $this->emit('newDocument', ['exit' => 4]);
            }
        }

        if (is_null($this->fileDocument)) {
            return $this->emit('newDocument', ['exit' => 4]);
        }

        $hoy = Carbon::now();

        // $fend = Carbon::createFromDate($this->dateDocument);
        // dd($fend);
        // dd(Carbon::createFromDate($this->dateDocument)->diffInDays($hoy));
        // dd($this->paramText);
        if ($this->paramText != 13) {
            if ($this->dateDocument <= $hoy) {
                return $this->emit('newDocument', ['exit' => 2]);
            }
        }

        $exit = 1;


        // validar que la fecha no sea anterior, y realizar la subida del archivo
        if ($this->paramText > 7 && $this->paramText <= 12) {
            $newState = DB::table('users')->where('id', $this->user)->value($this->colum[$this->paramText]);

            if ($this->dateDocument <= $newState) {
                return $this->emit('newDocument', ['exit' => 3]);
            }
            DB::table('users')->where('id', $this->user)->update([$this->colum[$this->paramText] => $this->dateDocument]);
        } else if ($this->paramText == 13) {

            $doc = User::where('id', $this->user)->value('identificationcard');

            $beneficiaryDoc = $this->certificate[$this->paramText] . $doc . '_' . $this->idbeneficiary . '.pdf';

            $ruta = DB::table('documents')->where('documentable_id', $this->user)->where('document_name', $beneficiaryDoc)->value('directory');
            $newRuta = str_replace('/storage', 'public', $ruta);
            Storage::delete($newRuta);

        } else {

            $newState = DB::table('drivers')->where('user_id', $this->user)->value($this->colum[$this->paramText]);
            if ($this->dateDocument <= $newState) {
                return $this->emit('newDocument', ['exit' => 3]);
            }
            DB::table('drivers')->where('user_id', $this->user)->update([$this->colum[$this->paramText] => $this->dateDocument]);
        }

        $this->extension = $this->fileDocument->extension();
        if ($this->paramText != 13) {
            $this->name = $this->certificate[$this->paramText] . $this->identificationcard . '_' . $this->dateDocument . '.' . $this->extension;
        } else {
            $this->name = $this->certificate[$this->paramText] . $this->identificationcard . '_' . $this->idbeneficiary . '.' . $this->extension;
        }
        $url = $this->fileDocument->storeAs('public/STEP/users/Ident_' . $this->identificationcard, $this->name);
        $this->Route = Storage::url($url);

        if ($this->paramText == 13) {
            # code...
        } else {
            DB::table('documents')->insert([
                'documentable_id' => $this->user,
                'document_name' => $this->name,
                'extension' => $this->extension,
                'directory' => $this->Route,
                'documentable_Type' => 'App\Models\User',
            ]);
        }

        $a = 99;

        $state = 100;

        for ($i = 0; $i <= count($this->certificate); $i++) {

            if ($i == 0 && $i <= 3) {

                $newState = DB::table('drivers')
                    ->where('user_id', $this->user)
                    ->value($this->colum[$i]);

                if ($newState < $hoy) {
                    $a = 100;
                }
                // dd($a);

            } else if ($i > 7 && $i <= 12) {

                $newState = DB::table('users')
                    ->where('id', $this->user)
                    ->value($this->colum[$i]);

                if ($newState < $hoy) {
                    $a = 100;
                }
            } else if ($i == 13) {
                # code...
            }
        }

        // dd($a != 100);
        if ($a != 100) {
            $state = $a;
            // $a = 100;
        }

        // dd($state);
        if ($state == 99) {
            DB::table('drivers')->where('user_id', $this->user)->update(['driver_status' => '2']);
        } else {
            DB::table('drivers')->where('user_id', $this->user)->update(['driver_status' => '1']);
        }


        // dd($this->fileDocument, $this->dateDocument);
        $this->emit('newDocument', ['exit' => $exit]);
    }

    public function expiration()
    {
        $this->emit('warning');
    }
}

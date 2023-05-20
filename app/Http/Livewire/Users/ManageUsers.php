<?php

namespace App\Http\Livewire\Users;

use App\Models\arl;
use App\Models\bloodType;
use App\Models\bonding;
use App\Models\charge;
use App\Models\city;
use App\Models\compensationBox;
use App\Models\country;
use App\Models\document;
use App\Models\User;
use App\Models\usertype;
use App\Models\driver;
use App\Models\economicActivity;
use App\Models\educationalLevel;
use App\Models\eps;
use App\Models\historicalArl;
use App\Models\historicalCompensationBox;
use App\Models\historicalDefensiveDriving;
use App\Models\historicalDistractions;
use App\Models\historicalDrivingMethods;
use App\Models\historicalDrivingTest;
use App\Models\historicalDrugsAlchoolemia;
use App\Models\historicalEps;
use App\Models\historicalFirst_Aid;
use App\Models\historicalFirstResponder;
use App\Models\historicalFiveSensesDriving;
use App\Models\historicalLandTransportStandards;
use App\Models\historicalLayoffs;
use App\Models\historicalLicense;
use App\Models\historicalNormTransit;
use App\Models\historicalPension;
use App\Models\historicalRoadSafety;
use App\Models\historicalSafetyActivePassiveVehicles;
use App\Models\historicalSimits;
use App\Models\historicalTipsNormative;
use App\Models\identification;
use App\Models\layoffs;
use App\Models\licenseCategory;
use App\Models\maritalStatus;
use App\Models\pension;
use App\Models\productsAndServices;
use App\Models\Province;
use App\Models\relationship;
use App\Models\supplierCategory;
use App\Models\workArea;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ManageUsers extends Component
{
    use WithFileUploads;

    public $search = "";
    public $sort = 'id';
    public $direction = 'desc';
    public $countrys, $Departments = null, $citiesSelects = null, $name, $extension, $Route, $Doc, $DocFecha, $RouteStart = 'public/STEP/users/Ident_',
        $editUsers = null, $editDriver = null,
        $certificate = [
            'Certificado_de_Licencia_usuario_', 'Certificado_drogas_alchoolemia_usuario_', 'Certificado_Consultas_SIMIT_usuario_', 'Certificado_Examen_Conduccion_usuario_',
            'Certificado_Norma_Transporte_terrestre_automotor_usuario_', 'Certificado_Normas_Transito_usuario_', 'Certificado_Tips_normativos_usuario_', 'Certificado_Metodos_Conduccion_usuario_',
            'Certificado_Manejo_Defensivo_usuario_', 'Certificado_Distracciones_usuario_', 'Certificado_Primeros_Auxilios_usuario_', 'Certificado_Primero_Respondiente_usuario_',
            'Certificado_Cinco_Sentidos_Conduccion_usuario_', 'Certificado_Seguridad_activa_pasiva_vehiculo_usuario_', 'Certificado_Seguridad_Vial_usuario_'
        ];
    public $username, $email, $password, $identificationcard, $usertype, $user_entry_date, $date_withdrawal_user, $firstname,
        $lastname, $profile_photo_path, $identification, $secondname, $motherslastname, $birthdate, $age, $type_sex, $country, $Department,
        $city, $address, $phone, $phone_cellular, $eps, $eps_status, $date_eps, $blood_type, $pension, $pension_status, $date_pension, $layoffs,
        $status_layoffs, $date_layoffs, $arl, $arl_status, $arl_date, $compensationbox, $compensationbox_status, $date_compensationbox, $charge,
        $civil_status, $family_document_type, $family_names, $relationship, $family_address, $family_phone, $family_phone_cellular, $city_birth,
        $place_expedition_identificationcard, $identificationcard_family, $bonding_type, $weight, $pant_size, $shirt_size, $shoe_size, $nit,
        $education_level, $educational_institution, $last_year, $study_end_date, $obtained_title, $last_company_name, $charges_last_company,
        $start_date_last_company, $date_end_last_company, $functions_performed, $supplier_name, $company_name_provider, $commercial_reason_supplier,
        $supplier_web_page, $supplier_category, $economic_activity, $products_and_services, $supplier_description, $salary, $aid_transport, $work_area,

        $license_number, $license_category, $license_expiration, $certificate_drugs_alchoolemia, $SIMIT_queries, $driving_exam, $Norm_Overland_Transportation_Automotive,
        $Rules_Transit, $Normative_Tips, $Driving_Methods, $Defensive_driving, $distractions, $First_aid, $First_Responder, $five_senses_driving, $Active_Passive_Security_vehicle,
        $Road_safety, $Linked,

        $license_number2, $license_category2, $license_expiration2, $certificate_drugs_alchoolemia2, $SIMIT_queries2, $driving_exam2, $Norm_Overland_Transportation_Automotive2,
        $Rules_Transit2, $Normative_Tips2, $Driving_Methods2, $Defensive_driving2, $distractions2, $First_aid2, $First_Responder2, $five_senses_driving2, $Active_Passive_Security_vehicle2,
        $Road_safety2, $Linked2,

        $Doclicense, $DocAlchoolemia, $DocSimitQueries, $DocdrivingExam, $DocNormOverlandTransportationAutomotive,
        $DocRulesTransit, $DocNormativeTips, $DocDrivingMethods, $DocDefensiveDriving, $Docdistractions, $DocFirstAid, $DocFirstResponder, $DocfiveSensesDriving, $DocActivePassiveSecurityVehicle,
        $DocRoadSafety,

        $doclicense, $docAlchoolemia, $docSimitQueries, $docdrivingExam, $docNormOverlandTransportationAutomotive,
        $docRulesTransit, $docNormativeTips, $docDrivingMethods, $docDefensiveDriving, $docdistractions, $docFirstAid, $docFirstResponder, $docfiveSensesDriving, $docActivePassiveSecurityVehicle,
        $docRoadSafety;


    protected $listeners = ['destroy', 'edit', 'documentUpdate'];

    protected $rules = [

        'editUsers.email'  => 'required',
        'editUsers.email_verified_at'  => 'required',
        'editUsers.password'  => 'required',
        'editUsers.two_factor_secret'  => 'required',
        'editUsers.two_factor_recovery_codes'  => 'required',
        'editUsers.two_factor_confirmed_at'  => 'required',
        'editUsers.remember_token'  => 'required',
        'editUsers.current_team_id'  => 'required',
        'editUsers.profile_photo_path'  => 'required',
        'editUsers.created_at'  => 'required',
        'editUsers.updated_at'  => 'required',
        'editUsers.identification'  => 'required',
        'editUsers.identificationcard'  => 'required',
        'editUsers.nit'  => 'required',
        'editUsers.firstname'  => 'required',
        'editUsers.secondname'  => 'required',
        'editUsers.lastname'  => 'required',
        'editUsers.motherslastname'  => 'required',
        'editUsers.birthdate'  => 'required',
        'editUsers.age'  => 'required',
        'editUsers.type_sex'  => 'required',
        'editUsers.country'  => 'required',
        'editUsers.Department'  => 'required',
        'editUsers.city'  => 'required',
        'editUsers.address'  => 'required',
        'editUsers.phone'  => 'required',
        'editUsers.phone_cellular'  => 'required',
        'editUsers.eps'  => 'required',
        'editUsers.eps_status'  => 'required',
        'editUsers.date_eps'  => 'required',
        'editUsers.blood_type'  => 'required',
        'editUsers.pension'  => 'required',
        'editUsers.pension_status'  => 'required',
        'editUsers.date_pension'  => 'required',
        'editUsers.layoffs'  => 'required',
        'editUsers.status_layoffs'  => 'required',
        'editUsers.date_layoffs'  => 'required',
        'editUsers.arl'  => 'required',
        'editUsers.arl_status'  => 'required',
        'editUsers.arl_date'  => 'required',
        'editUsers.compensationbox'  => 'required',
        'editUsers.compensationbox_status'  => 'required',
        'editUsers.date_compensationbox'  => 'required',
        'editUsers.user_state'  => 'required',
        'editUsers.user_entry_date'  => 'required',
        'editUsers.date_withdrawal_user'  => 'required',
        'editUsers.charge'  => 'required',
        'editUsers.usertype'  => 'required',
        'editUsers.civil_status'  => 'required',
        'editUsers.family_document_type'  => 'required',
        'editUsers.family_names'  => 'required',
        'editUsers.relationship'  => 'required',
        'editUsers.family_address'  => 'required',
        'editUsers.family_phone'  => 'required',
        'editUsers.family_phone_cellular'  => 'required',
        'editUsers.city_birth'  => 'required',
        'editUsers.place_expedition_identificationcard'  => 'required',
        'editUsers.identificationcard_family'  => 'required',
        'editUsers.bonding_type'  => 'required',
        'editUsers.weight'  => 'required',
        'editUsers.pant_size'  => 'required',
        'editUsers.shirt_size'  => 'required',
        'editUsers.shoe_size'  => 'required',
        'editUsers.education_level'  => 'required',
        'editUsers.educational_institution'  => 'required',
        'editUsers.last_year'  => 'required',
        'editUsers.study_end_date'  => 'required',
        'editUsers.obtained_title'  => 'required',
        'editUsers.last_company_name'  => 'required',
        'editUsers.charges_last_company'  => 'required',
        'editUsers.start_date_last_company'  => 'required',
        'editUsers.date_end_last_company'  => 'required',
        'editUsers.functions_performed'  => 'required',
        'editUsers.supplier_name'  => 'required',
        'editUsers.company_name_provider'  => 'required',
        'editUsers.commercial_reason_supplier'  => 'required',
        'editUsers.supplier_web_page'  => 'required',
        'editUsers.supplier_category'  => 'required',
        'editUsers.economic_activity'  => 'required',
        'editUsers.products_and_services'  => 'required',
        'editUsers.supplier_description'  => 'required',
        'editUsers.salary'  => 'required',
        'editUsers.aid_transport'  => 'required',
        'editUsers.work_area'  => 'required',
        'editUsers.username'  => 'required',
    ];


    public function store()
    {

        if ($this->usertype == 3) {
            
           $docFind = DB::table('users')->where('nit', $this->nit)->value('nit');
        } else {
           $docFind = DB::table('users')->where('identificationcard', $this->identificationcard)->value('identificationcard');
        }
          
        if ($docFind > 0) {
           return $this->emit('crud', ['document' => $docFind], ['process' => 4], ['name' => '']);
        }

        $emailFind = DB::table('users')->where('email', $this->email)->value('email');

        if ($emailFind > 0) {
            return $this->emit('crud', ['document' => $emailFind], ['process' => 5], ['name' => '']);
         }

        $userNameFind = DB::table('users')->where('username', $this->username)->value('username');

        if ($userNameFind > 0) {
            return $this->emit('crud', ['document' => $userNameFind], ['process' => 6], ['name' => '']);
         }

        // $Routelicense = Storage::put('STEP/users/'.'Ident_'. $this->identificationcard, $this->Doclicense);
        // $name = $this->Doclicense->hashName();

        // $profileExtension = $this->profile_photo_path->extension();
        if ($this->profile_photo_path != '') {

            $profileExtension = $this->profile_photo_path->extension();
            $nameprofile = 'profile_user_' . $this->identificationcard . '.' . $profileExtension;
            $urlprofile = $this->profile_photo_path->storeAs($this->RouteStart . $this->identificationcard, $nameprofile);
            $Routeprofile = Storage::url($urlprofile);
        }else {
            $Routeprofile = '';
        }

        $newName = '';
        if ($this->firstname != '') {
            $this->username = strtolower($this->firstname[0].$this->lastname);
        } else {
            // $a = 0;
            // do {
            //     if ($this->supplier_name[$a] != '') {
            //         $newName = $newName . strtolower($this->supplier_name[$a]);
            //         $a = $a+1;
            //     } else {
            //         $a = 100;
            //     }
                
            // } while ($a == 100);

            // $this->username = $newName;
        }

        // dd($this->username);
         
        
        // dd($this->username);

        $age = Carbon::createFromDate($this->birthdate)->age;

        $user = User::create([
            'username'  => $this->username,
            'email'  => $this->email,
            'password'  => bcrypt('12345678'),
            'identificationcard'  => $this->identificationcard,
            'usertype'  => $this->usertype,
            'user_state'  => '1',
            'user_entry_date'  => $this->user_entry_date,
            'date_withdrawal_user'  => $this->date_withdrawal_user,
            'firstname'  => $this->firstname,
            'lastname'  => $this->lastname,
            'profile_photo_path'  => $Routeprofile,
            'identification'  => $this->identification,
            'secondname'  => $this->secondname,
            'motherslastname'  => $this->motherslastname,
            'birthdate'  => $this->birthdate,
            'age'  => $age,
            'type_sex'  => $this->type_sex,
            'country'  => $this->country,
            'Department'  => $this->Department,
            'city'  => $this->city,
            'address'  => $this->address,
            'phone'  => $this->phone,
            'phone_cellular'  => $this->phone_cellular,
            'eps'  => $this->eps,
            'eps_status'  => $this->eps_status,
            'date_eps'  => $this->date_eps,
            'blood_type'  => $this->blood_type,
            'pension'  => $this->pension,
            'pension_status'  => $this->pension_status,
            'date_pension'  => $this->date_pension,
            'layoffs'  => $this->layoffs,
            'status_layoffs'  => $this->status_layoffs,
            'date_layoffs'  => $this->date_layoffs,
            'arl'  => $this->arl,
            'arl_status'  => $this->arl_status,
            'arl_date'  => $this->arl_date,
            'compensationbox'  => $this->compensationbox,
            'compensationbox_status'  => $this->compensationbox_status,
            'date_compensationbox'  => $this->date_compensationbox,
            'charge'  => $this->charge,
            'civil_status'  => $this->civil_status,
            'family_document_type'  => $this->family_document_type,
            'family_names'  => $this->family_names,
            'relationship'  => $this->relationship,
            'family_address'  => $this->family_address,
            'family_phone'  => $this->family_phone,
            'family_phone_cellular'  => $this->family_phone_cellular,
            'city_birth'  => $this->city_birth,
            'place_expedition_identificationcard'  => $this->place_expedition_identificationcard,
            'identificationcard_family'  => $this->identificationcard_family,
            'bonding_type'  => $this->bonding_type,
            'weight'  => $this->weight,
            'pant_size'  => $this->pant_size,
            'shirt_size'  => $this->shirt_size,
            'shoe_size'  => $this->shoe_size,
            'education_level'  => $this->education_level,
            'educational_institution'  => $this->educational_institution,
            'last_year'  => $this->last_year,
            'study_end_date'  => $this->study_end_date,
            'obtained_title'  => $this->obtained_title,
            'last_company_name'  => $this->last_company_name,
            'charges_last_company'  => $this->charges_last_company,
            'start_date_last_company'  => $this->start_date_last_company,
            'date_end_last_company'  => $this->date_end_last_company,
            'functions_performed'  => $this->functions_performed,
            'supplier_name'  => $this->supplier_name,
            'company_name_provider'  => $this->company_name_provider,
            'commercial_reason_supplier'  => $this->commercial_reason_supplier,
            'supplier_web_page'  => $this->supplier_web_page,
            'supplier_category'  => $this->supplier_category,
            'economic_activity'  => $this->economic_activity,
            'products_and_services'  => $this->products_and_services,
            'supplier_description'  => $this->supplier_description,
            'nit' => $this->nit,
            'salary'  => $this->salary,
            'aid_transport'  => $this->aid_transport,
            'work_area'  => $this->work_area,
        ]);

        // if ($this->usertype == 2) {

            // $user_idsfind = User::latest('id')->first()->get();

            // foreach ($user_idsfind as $user_ids) {
            //     $user_id = $user_ids->id;
            // }

            $user_id = User::latest('id')->value('id');

            // if ($this->arl_date != "") {
            //     historicalArl::create([
            //         'user_id'  => $user_id,
            //         'id_arl'  => $this->arl,
            //         'renewal_date'  => $this->arl_date,
            //     ]);
            // }

            // if ($this->date_eps != "") {
            //     historicalEps::create([
            //         'user_id'  => $user_id,
            //         'eps_id'  => $this->eps,
            //         'renewal_date'  => $this->date_eps,
            //     ]);
            // }

            // if ($this->date_layoffs != "") {
            //     historicalLayoffs::create([
            //         'user_id'  => $user_id,
            //         'layoffs_id'  => $this->layoffs,
            //         'renewal_date'  => $this->date_layoffs,
            //     ]);
            // }

            // if ($this->date_pension != "") {
            //     historicalPension::create([
            //         'user_id'  => $user_id,
            //         'pension_id'  => $this->pension,
            //         'renewal_date'  => $this->date_pension,
            //     ]);
            // }


            // if ($this->date_compensationbox != "") {
            //     historicalCompensationBox::create([
            //         'user_id'  => $user_id,
            //         'id_compensationbox'  => $this->compensationbox,
            //         'renewal_date'  => $this->date_compensationbox,
            //     ]);
            // }
        // }

        if ($this->charge == 5) {

            driver::create([

                'user_id'  => $user_id,
                'license_number'  => $this->license_number,
                'license_category'  => $this->license_category,
                'license_expiration'  => $this->license_expiration,
                'certificate_drugs_alchoolemia'  => $this->certificate_drugs_alchoolemia,
                'SIMIT_queries'  => $this->SIMIT_queries,
                'driving_exam'  => $this->driving_exam,
                'Norm_Overland_Transportation_Automotive'  => $this->Norm_Overland_Transportation_Automotive,
                'Rules_Transit'  => $this->Rules_Transit,
                'Normative_Tips'  => $this->Normative_Tips,
                'Driving_Methods'  => $this->Driving_Methods,
                'Defensive_driving'  => $this->Defensive_driving,
                'distractions'  => $this->distractions,
                'First_aid'  => $this->First_aid,
                'First_Responder'  => $this->First_Responder,
                'five_senses_driving'  => $this->five_senses_driving,
                'Active_Passive_Security_vehicle'  => $this->Active_Passive_Security_vehicle,
                'Road_safety'  => $this->Road_safety,
                'driver_status'  => '0',
                'Linked'  => $this->Linked,
            ]);

            $this->Doc = [
                $this->Doclicense, $this->DocAlchoolemia, $this->DocSimitQueries, $this->DocdrivingExam, $this->DocNormOverlandTransportationAutomotive,
                $this->DocRulesTransit, $this->DocNormativeTips, $this->DocDrivingMethods, $this->DocDefensiveDriving, $this->Docdistractions, $this->DocFirstAid,
                $this->DocFirstResponder, $this->DocfiveSensesDriving, $this->DocActivePassiveSecurityVehicle, $this->DocRoadSafety
    
            ];
    
            $this->DocFecha = [
                $this->license_expiration, $this->certificate_drugs_alchoolemia, $this->SIMIT_queries, $this->driving_exam, $this->Norm_Overland_Transportation_Automotive,
                $this->Rules_Transit, $this->Normative_Tips, $this->Driving_Methods, $this->Defensive_driving, $this->distractions, $this->First_aid,
                $this->First_Responder, $this->five_senses_driving, $this->Active_Passive_Security_vehicle, $this->Road_safety
            ];
            
    
    
            for ($i = 0; $i <= 13; $i++) {
    
                if ($this->Doc != "" || $this->Doc != 0) {
    
                    $this->insertDocument($this->certificate[$i], $this->Doc[$i], $this->DocFecha[$i]);
    
                    $user->documents()->create([
                        'document_name' => $this->name,
                        'extension' => $this->extension,
                        'directory' => $this->Route,
                    ]);
                }
            }

            // $driversfind = driver::latest('id')->first()->get();

            // foreach ($driversfind as $drivers) {
            //     $drivers = $drivers->id;
            // }

            // $drivers = driver::latest('id')->value('id');

            // if ($this->SIMIT_queries != "" || $this->SIMIT_queries != 0) {
            //     historicalSimits::create([
            //         'driver_id' => $drivers,
            //         'Simits_certification' => $this->SIMIT_queries,
            //     ]);
            // }

            // if ($this->license_expiration != "" || $this->license_expiration != 0) {
            //     historicalLicense::create([
            //         'driver_id'  => $drivers,
            //         'license_number'  => $this->license_number,
            //         'license_category'  => $this->license_category,
            //         'license_expiration'  => $this->license_expiration,
            //     ]);
            // }


            // if ($this->First_aid != "" || $this->First_aid != 0) {
            //     historicalFirst_Aid::create([
            //         'driver_id'  => $drivers,
            //         'First_Aid_certification'  => $this->First_aid,
            //     ]);
            // }


            // if ($this->Road_safety != "" || $this->Road_safety != 0) {
            //     historicalRoadSafety::create([
            //         'driver_id'  => $drivers,
            //         'Road_safety_certification'  => $this->Road_safety,
            //     ]);
            // }


            // if ($this->distractions != "" || $this->distractions != 0) {
            //     historicalDistractions::create([
            //         'driver_id'  => $drivers,
            //         'distractions_certification'  => $this->distractions,
            //     ]);
            // }


            // if ($this->driving_exam != "" || $this->driving_exam != 0) {
            //     historicalDrivingTest::create([
            //         'driver_id'  => $drivers,
            //         'Driving_Test_certification'  => $this->driving_exam,
            //     ]);
            // }


            // if ($this->Rules_Transit != "" || $this->Rules_Transit != 0) {
            //     historicalNormTransit::create([
            //         'driver_id'  => $drivers,
            //         'Norm_Transit_certification'  => $this->Rules_Transit,
            //     ]);
            // }

            // if ($this->Normative_Tips != "" || $this->Normative_Tips != 0) {
            //     historicalTipsNormative::create([
            //         'driver_id'  => $drivers,
            //         'Tips_Normative_certification'  => $this->Normative_Tips,
            //     ]);
            // }


            // if ($this->Driving_Methods != "" || $this->Driving_Methods != 0) {
            //     historicalDrivingMethods::create([
            //         'driver_id'  => $drivers,
            //         'driving_Methods_certification'  => $this->Driving_Methods,
            //     ]);
            // }


            // if ($this->First_Responder != "" || $this->First_Responder != 0) {
            //     historicalFirstResponder::create([
            //         'driver_id'  => $drivers,
            //         'First_Responder_certification'  => $this->First_Responder,
            //     ]);
            // }


            // if ($this->Defensive_driving != "" || $this->Defensive_driving != 0) {
            //     historicalDefensiveDriving::create([
            //         'driver_id'  => $drivers,
            //         'Defensive_driving_certification'  => $this->Defensive_driving,
            //     ]);
            // }


            // if ($this->certificate_drugs_alchoolemia != "" || $this->certificate_drugs_alchoolemia != 0) {
            //     historicalDrugsAlchoolemia::create([
            //         'driver_id'  => $drivers,
            //         'drugs_alchoolemia_certification'  => $this->certificate_drugs_alchoolemia,
            //     ]);
            // }


            // if ($this->five_senses_driving != "" || $this->five_senses_driving != 0) {
            //     historicalFiveSensesDriving::create([
            //         'driver_id'  => $drivers,
            //         'Five_Senses_Driving_certification'  => $this->five_senses_driving,
            //     ]);
            // }

            // if ($this->Norm_Overland_Transportation_Automotive != "" || $this->Norm_Overland_Transportation_Automotive != 0) {
            //     historicalLandTransportStandards::create([
            //         'driver_id'  => $drivers,
            //         'Land_Transport_Standards_certification'  => $this->Norm_Overland_Transportation_Automotive,
            //     ]);
            // }


            // if ($this->Active_Passive_Security_vehicle != "" || $this->Active_Passive_Security_vehicle != 0) {
            //     historicalSafetyActivePassiveVehicles::create([
            //         'driver_id'  => $drivers,
            //         'Safety_Active_Passive_Vehicles_certification'  => $this->Active_Passive_Security_vehicle,
            //     ]);
            // }
        }

        $name = $this->firstname . " " . $this->secondname . " " . $this->lastname . " " . $this->motherslastname;

        if ($this->usertype == 3) {
            $this->emit('crud', ['document' => $this->nit], ['process' => 1], ['name' => $this->supplier_name]);
        } else {
            $this->emit('crud', ['document' => $this->identificationcard], ['process' => 1], ['name' => $name]);
        }


        $this->clear();
    }

    // actualizar un usuario
    public function update()
    {
        $this->editUsers->save();

        if ($this->editUsers->usertype == 3) {
            $document = $this->editUsers->nit;
            $name = $this->editUsers->supplier_name;
        } else {
            $document = $this->editUsers->identificationcard;
            $name = $this->editUsers->firstname.' '.$this->editUsers->secondname.' '.$this->editUsers->lastname.' '.$this->editUsers->motherslastname;
        }

        $this->emit('crud', ['document' => $document], ['process' => 2], ['name' => $name]);

        $this->clear();
    }

    // actualizar un documento de un usuario
    public function documentUpdate($paramText, $documentName)
    {

        $documentName = $documentName[0];

        $ruta = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%' . $documentName . '%')->value('id');


        $paramText = $paramText[0];

        $this->Doc = [
            $this->Doclicense, $this->DocAlchoolemia, $this->DocSimitQueries, $this->DocdrivingExam, $this->DocNormOverlandTransportationAutomotive,
            $this->DocRulesTransit, $this->DocNormativeTips, $this->DocDrivingMethods, $this->DocDefensiveDriving, $this->Docdistractions, $this->DocFirstAid,
            $this->DocFirstResponder, $this->DocfiveSensesDriving, $this->DocActivePassiveSecurityVehicle, $this->DocRoadSafety

        ];

        $this->DocFecha = [
            $this->license_expiration2, $this->certificate_drugs_alchoolemia2, $this->SIMIT_queries2, $this->driving_exam2, $this->Norm_Overland_Transportation_Automotive2,
            $this->Rules_Transit2, $this->Normative_Tips2, $this->Driving_Methods2, $this->Defensive_driving2, $this->distractions2, $this->First_aid2,
            $this->First_Responder2, $this->five_senses_driving2, $this->Active_Passive_Security_vehicle2, $this->Road_safety2
        ];

        for ($i = 0; $i <= $paramText; $i++) {
            if ($paramText == $i) {
                // dd($this->Doc[$i]);
                // $fech = $this->DocFecha[$i];
                $this->insertDocument($this->certificate[$i], $this->Doc[$i], $this->DocFecha[$i]);
            }
        }

        if ($ruta != null) {

            $directory = DB::table('documents')->where('id', $ruta)->value('directory');
            $newRuta = str_replace('/storage', 'public', $directory);
            Storage::delete($newRuta);

            DB::table('documents')->where('id', $ruta)->update(['document_name' => $this->name, 'directory' => $this->Route, 'extension' => $this->extension]);
            // dd('se actualizo');
            
            $this->emit('documentup', ['up' => 1],['input' => $paramText]);
        } else {
            DB::table('documents')->insert([
                'documentable_id' => $this->editUsers->id,
                'document_name' => $this->name,
                'extension' => $this->extension,
                'directory' => $this->Route,
                'documentable_Type' => 'App\Models\User',
            ]);
            // dd('se creo');
            
            $this->emit('documentup', ['up' => 2],['input' => $paramText]);
        }

        $this->validateColor();        
        
    }

    public function destroy($id)
    {
        $typeUser = DB::table('users')->where('id', $id)->value('usertype');
        if ($typeUser == 3) {
            $document = DB::table('users')->where('id', $id)->value('nit');
            $name = DB::table('users')->where('id', $id)->value('supplier_name');
        } else {
            $document = DB::table('users')->where('id', $id)->value('identificationcard');
            $name = DB::table('users')->where('id', $id)->value(DB::raw('CONCAT(firstname, " ", secondname, " ",lastname, " ", motherslastname) As owner'));
        }

        // dd($plate);
        User::destroy($id);

        // $limitDelete = DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->count();
        // dd($limitDelete);
        // for ($i = 0; $i <= $limitDelete; $i++) {
        //     $ruta = DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->value('directory');
        //     $newRuta = str_replace('/storage', 'public', $ruta);
        //     // dd([$newRuta]);
        //     Storage::delete($newRuta);
        //     DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\vehicle%')->limit(1)->delete();
        // }
        DB::table('documents')->where('documentable_id', $id)->where('documentable_Type', 'like', '%\User%')->delete();

        Storage::deleteDirectory('public/STEP/users/Ident_' . $document);

        $this->emit('crud', ['document' => $document], ['process' => 3], ['name' => $name]);
    }

    // cargar los datos del usuario que se van a editar
    public function edit(User $user)
    {
        $this->editUsers = $user;
        $editDriver = DB::table('drivers')->where('user_id', $this->editUsers->id)->get();
        foreach ($editDriver as $key) {
            $this->license_number2 = $key->license_number;
            $this->license_category2 = $key->license_category;
            $this->license_expiration2 = $key->license_expiration;
            $this->certificate_drugs_alchoolemia2 = $key->certificate_drugs_alchoolemia;
            $this->SIMIT_queries2 = $key->SIMIT_queries;
            $this->driving_exam2 = $key->driving_exam;
            $this->Norm_Overland_Transportation_Automotive2 = $key->Norm_Overland_Transportation_Automotive;
            $this->Rules_Transit2 = $key->Rules_Transit;
            $this->Normative_Tips2 = $key->Normative_Tips;
            $this->Driving_Methods2 = $key->Driving_Methods;
            $this->Defensive_driving2 = $key->Driving_Methods;
            $this->distractions2 = $key->distractions;
            $this->First_aid2 = $key->First_aid;
            $this->First_Responder2 = $key->First_Responder;
            $this->five_senses_driving2 = $key->five_senses_driving;
            $this->Active_Passive_Security_vehicle2 = $key->Active_Passive_Security_vehicle;
            $this->Road_safety2 = $key->Road_safety;
            $this->Linked2 = $key->Linked;
        }

        $this->validateColor();

        $this->emit('openModalEdit');
        
    }

    public function render()
    {
        // $users = User::all();
        $users = User::join('usertypes', 'users.usertype', '=', 'usertypes.id')
            ->select(
                'users.id',
                'firstname',
                'lastname',
                'identificationcard',
                'description_usertype',
                'user_state',
                'user_entry_date',
                'username',
                'email',
                'usertype',
                'supplier_name',
                'supplier_category',
                'profile_photo_path',
                'nit'
            )
            ->where('firstname', 'like', '%' . $this->search . '%')
            ->orwhere('lastname', 'like', '%' . $this->search . '%')
            ->orwhere('identificationcard', 'like', '%' . $this->search . '%')
            ->orwhere('description_usertype', 'like', '%' . $this->search . '%')
            ->orwhere('user_state', 'like', $this->search . '%')
            ->orwhere('user_entry_date', 'like', '%' . $this->search . '%')
            ->orwhere('username', 'like', '%' . $this->search . '%')
            ->orwhere('email', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)->get();

        $linkers = user::select('id', DB::raw('CONCAT(firstname, secondname, lastname, motherslastname) As owner'))
            ->where('usertype', '=', 4)->get();

        $charges = charge::all();

        $identifications = identification::all();

        $economicActivitys = economicActivity::all();

        $productsAndServices = productsAndServices::all();

        $countries = country::all();

        $provinces = Province::all();

        $cities = city::all();

        $maritalstatus = maritalStatus::all();

        $workAreas = workArea::all();

        $bondingTypes = bonding::all();

        $educationLevels = educationalLevel::all();

        $relationships = relationship::all();

        $epses = eps::all();

        $bloodTypes = bloodType::all();

        $pensions = pension::all();

        $layoffes = layoffs::all();

        $arls = arl::all();

        $compensationboxes = compensationBox::all();

        $licenseCategories = licenseCategory::all();

        $supplierCategories = supplierCategory::pluck('description_CategorySupplier', 'id');

        return view('livewire.users.manage-users', compact(
            'users',
            'charges',
            'identifications',
            'economicActivitys',
            'productsAndServices',
            'countries',
            'provinces',
            'cities',
            'maritalstatus',
            'workAreas',
            'bondingTypes',
            'educationLevels',
            'relationships',
            'epses',
            'bloodTypes',
            'pensions',
            'layoffes',
            'arls',
            'compensationboxes',
            'licenseCategories',
            'linkers',
            'supplierCategories'
        ));
    }

    public function clear()
    {
        $this->reset([
            'username',
            'email',
            'password',
            'identificationcard',
            'usertype',
            'user_entry_date',
            'date_withdrawal_user',
            'firstname',
            'lastname',
            'profile_photo_path',
            'identification',
            'secondname',
            'motherslastname',
            'birthdate',
            'age',
            'type_sex',
            'country',
            'Department',
            'city',
            'address',
            'phone',
            'phone_cellular',
            'eps',
            'eps_status',
            'date_eps',
            'blood_type',
            'pension',
            'pension_status',
            'date_pension',
            'layoffs',
            'status_layoffs',
            'date_layoffs',
            'arl',
            'arl_status',
            'arl_date',
            'compensationbox',
            'compensationbox_status',
            'date_compensationbox',
            'charge',
            'civil_status',
            'family_document_type',
            'family_names',
            'relationship',
            'family_address',
            'family_phone',
            'family_phone_cellular',
            'city_birth',
            'place_expedition_identificationcard',
            // 'identificationcard_family',
            'bonding_type',
            'weight',
            'pant_size',
            'shirt_size',
            'shoe_size',
            'education_level',
            'educational_institution',
            'last_year',
            'study_end_date',
            'obtained_title',
            'last_company_name',
            'charges_last_company',
            'start_date_last_company',
            'date_end_last_company',
            'functions_performed',
            'supplier_name',
            'company_name_provider',
            'commercial_reason_supplier',
            'supplier_web_page',
            'supplier_category',
            'economic_activity',
            'products_and_services',
            'supplier_description',
            'salary',
            'aid_transport',
            'work_area',
            'license_number',
            'license_category',
            'license_expiration',
            'certificate_drugs_alchoolemia',
            'SIMIT_queries',
            'driving_exam',
            'Norm_Overland_Transportation_Automotive',
            'Rules_Transit',
            'Normative_Tips',
            'Driving_Methods',
            'Defensive_driving',
            'distractions',
            'First_aid',
            'First_Responder',
            'five_senses_driving',
            'Active_Passive_Security_vehicle',
            'Road_safety',
            'Linked',
            'nit',
        ]);

        $this->Doc = [];
        $this->DocFecha = [];
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

    public function updatedcountry($country)
    {

        $this->Departments = Province::where('partner_country', $country)->get();
    }


    public function updatedDepartment($Department)
    {

        $this->citiesSelects = city::where('associate_department', $Department)->get();
    }

    public function insertDocument($certificate, $ParamDoc, $ParamFecha)
    {

        if ($this->identificationcard == "") {
            $this->identificationcard = $this->editUsers->identificationcard;
        }

        // $this->certificate = 'Certificado_de_Licencia_usuario_';
        $this->extension = $ParamDoc->extension();
        $this->name = $certificate . $this->identificationcard . '_' . $ParamFecha . '.' . $this->extension;
        $url = $ParamDoc->storeAs($this->RouteStart . $this->identificationcard, $this->name);
        $this->Route = Storage::url($url);
    }

    public function validateColor(){

        $this->doclicense = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Licencia%')->value('id');
        $this->docAlchoolemia = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%alchoolemia%')->value('id');
        $this->docSimitQueries = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%SIMIT%')->value('id');
        $this->docdrivingExam = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Examen%')->value('id');
        $this->docNormOverlandTransportationAutomotive = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Norma_Transporte%')->value('id');
        $this->docRulesTransit = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Normas_Transito%')->value('id');
        $this->docNormativeTips = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Tips_normativos%')->value('id');
        $this->docDrivingMethods = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Metodos_Conduccion%')->value('id');
        $this->docDefensiveDriving = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Defensivo%')->value('id');
        $this->docdistractions = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Distracciones%')->value('id');
        $this->docFirstAid = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Primeros_Auxilios%')->value('id');
        $this->docFirstResponder = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Primero_Respondiente%')->value('id');
        $this->docfiveSensesDriving = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Cinco_Sentidos%')->value('id');
        $this->docActivePassiveSecurityVehicle = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Seguridad_activa_pasiva%')->value('id');
        $this->docRoadSafety = DB::table('documents')->where('documentable_id', $this->editUsers->id)->where('documentable_Type', 'like', '%\User%')->where('document_name', 'like', '%Seguridad_Vial%')->value('id');

        if ($this->doclicense == null) {
            $this->doclicense = 0;
        }

        if ($this->docAlchoolemia == null) {
            $this->docAlchoolemia = 0;
        }

        if ($this->docSimitQueries == null) {
            $this->docSimitQueries = 0;
        }

        if ($this->docdrivingExam == null) {
            $this->docdrivingExam = 0;
        }

        if ($this->docNormOverlandTransportationAutomotive == null) {
            $this->docNormOverlandTransportationAutomotive = 0;
        }

        if ($this->docRulesTransit == null) {
            $this->docRulesTransit = 0;
        }

        if ($this->docNormativeTips == null) {
            $this->docNormativeTips = 0;
        }

        if ($this->docDrivingMethods == null) {
            $this->docDrivingMethods = 0;
        }

        if ($this->docDefensiveDriving == null) {
            $this->docDefensiveDriving = 0;
        }

        if ($this->docdistractions == null) {
            $this->docdistractions = 0;
        }

        if ($this->docFirstAid == null) {
            $this->docFirstAid = 0;
        }

        if ($this->docFirstResponder == null) {
            $this->docFirstResponder = 0;
        }

        if ($this->docfiveSensesDriving == null) {
            $this->docfiveSensesDriving = 0;
        }

        if ($this->docActivePassiveSecurityVehicle == null) {
            $this->docActivePassiveSecurityVehicle = 0;
        }

        if ($this->docRoadSafety == null) {
            $this->docRoadSafety = 0;
        }

        if ($this->editUsers->charge == 5) {
            $this->emit('documentStatus', ['doclicense' => $this->doclicense], ['docAlchoolemia' => $this->docAlchoolemia], ['docSimitQueries' => $this->docSimitQueries],
            ['docdrivingExam' => $this->docdrivingExam ], ['docNormOverlandTransportationAutomotive' => $this->docNormOverlandTransportationAutomotive],['docRulesTransit' => $this->docRulesTransit ],
            ['docNormativeTips' => $this->docNormativeTips ], ['docDrivingMethods' => $this->docDrivingMethods],['docDefensiveDriving' => $this->docDefensiveDriving ],
            ['docdistractions' => $this->docdistractions ], ['docFirstAid' => $this->docFirstAid],['docFirstResponder' => $this->docFirstResponder ],
            ['docfiveSensesDriving' => $this->docfiveSensesDriving ], ['docActivePassiveSecurityVehicle' => $this->docActivePassiveSecurityVehicle], ['docRoadSafety' => $this->docRoadSafety]);
        }

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\permit;
use App\Models\User;
use App\Models\vehicle;
use Illuminate\Http\Request;
use Database;
use Illuminate\Support\Facades\DB;

class DatatableController extends Controller
{
    //
    public function user(){
        // $users = User::all();
        $users = User::join('usertypes', 'users.usertype', '=', 'usertypes.id')
        ->leftjoin('charges', 'users.charge', '=', 'charges.id')
        ->leftjoin('identifications', 'users.identification', '=', 'identifications.id')
        ->leftjoin('countries', 'users.country', '=', 'countries.id')
        ->leftjoin('provinces', 'users.Department', '=', 'provinces.id')
        ->leftjoin('cities', 'users.city', '=', 'cities.id')
        // ->leftjoin('cities', 'users.city_birth', '=', 'cities.id')
        ->leftjoin('eps', 'users.eps', '=', 'eps.id')
        ->leftjoin('blood_types', 'users.blood_type', '=', 'blood_types.id')
        ->leftjoin('pensions', 'users.pension', '=', 'pensions.id')
        ->leftjoin('layoffs', 'users.layoffs', '=', 'layoffs.id')
        ->leftjoin('arls', 'users.arl', '=', 'arls.id')
        ->leftjoin('compensation_boxes', 'users.compensationbox', '=', 'compensation_boxes.id')
        ->leftjoin('relationships', 'users.relationship', '=', 'relationships.id')
        ->leftjoin('marital_statuses', 'users.civil_status', '=', 'marital_statuses.id')
        ->leftjoin('bondings', 'users.bonding_type', '=', 'bondings.id')
        ->leftjoin('educational_levels', 'users.education_level', '=', 'educational_levels.id')
        ->leftjoin('work_areas', 'users.work_area', '=', 'work_areas.id')
        ->leftjoin('economic_activities', 'users.economic_activity', '=', 'economic_activities.id')
        ->leftjoin('products_and_services', 'users.products_and_services', '=', 'products_and_services.id')
        ->select(
            'users.id',
            'firstname',
            'lastname',
            'identificationcard',
            'description_usertype',
            // 'charge',
            'description_charge',
            'user_state',
            'user_entry_date',
            'username',
            'email',
            'usertype',
            'supplier_name',
            'supplier_category',
            'profile_photo_path',
            'nit',
            // 'email_verified_at',
            // 'password',
            // 'two_factor_secret',
            // 'two_factor_recovery_codes',
            // 'two_factor_confirmed_at',
            // 'remember_token',
            // 'current_team_id',
            // 'created_at',
            // 'updated_at',
            // 'identification',
            'description_identification',
            // 'secondname',
            // 'motherslastname',
            'birthdate',
            'age',
            'type_sex',
            // 'country',
            'country_name',
            // 'Department',
            'department_name',
            // 'city',
            'city_name',
            'address',
            'phone',
            'phone_cellular',
            // 'eps',
            'description_eps',
            // 'eps_status',
            'date_eps',
            // 'blood_type',
            'blood_type_description',
            // 'pension',
            'description_pension',
            // 'pension_status',
            'date_pension',
            // 'layoffs',
            'description_layoffs',
            // 'status_layoffs',
            'date_layoffs',
            // 'arl',
            'description_arl',
            // 'arl_status',
            'arl_date',
            // 'compensationbox',
            'description_compensationbox',
            // 'compensationbox_status',
            'date_compensationbox',
            'date_withdrawal_user',
            // 'civil_status',
            'description_maritalstatus',
            // 'family_document_type',
            'description_identification',
            'family_names',
            // 'relationship',
            'description_relationship',
            'family_address',
            'family_phone',
            'family_phone_cellular',
            'city_birth',
            // 'city_name',
            'place_expedition_identificationcard',
            'identificationcard_family',
            // 'bonding_type',
            'bonding_type_description',
            'weight',
            'pant_size',
            'shirt_size',
            'shoe_size',
            // 'education_level',
            'description_levelEducation',
            'educational_institution',
            'last_year',
            'study_end_date',
            'obtained_title',
            'last_company_name',
            'charges_last_company',
            'start_date_last_company',
            'date_end_last_company',
            'functions_performed',
            'company_name_provider',
            'commercial_reason_supplier',
            'supplier_web_page',
            // 'economic_activity',
            'description_EconomicActivity',
            // 'products_and_services',
            'ProductandService_description',
            'supplier_description',
            'salary',
            'aid_transport',
            // 'work_area'
            'workarea_description'
            )->get();

        return datatables()->of($users)->toJson();
    }
    //

    public function contract(){
        $contracts = contract::join('contract_types', 'contracts.type_contract', '=', 'contract_types.id')
        ->leftjoin('identifications', 'contracts.identification', '=', 'identifications.id')
        ->leftjoin('identifications as i', 'contracts.identification_represent_legal', '=', 'i.id')
        ->leftjoin('payment_types', 'contracts.tipe_pay', '=', 'payment_types.id')
        ->select(
            'contracts.id',
            'contract_number',
            'description_typeContract',
            // 'type_contract',
            'route_trip_contract',
            'date_start_contract',
            'contract_end_date',
            'contract_value',
            'contracting_name',
            'state_contract',
            // 'identification',
            'identifications.description_identification',
            'contract_document',
            'expedition_identificationcard',
            'contracting_phone',
            'contracting_direction',
            'legal_representative',
            'legal_representative_expedition_identificationcard',
            'passenger_quantity',
            'total_disposition',
            'quantity_vehicle',
            'cooperation_contract',
            // 'entity_name',
            'secure_policy',
            // 'tipe_pay',
            'description_typePayment',
            'contract_signing_date',
            'school_name',
            'address_school',
            'school_year',
            'contract_with',
            // 'identification_represent_legal',
            'i.description_identification as identF',
            'identificationcard_represent_legal',
            'identificationcard_representative_group',
            'group_representative_name',
            'dateofexpedition_representative_group',
            'signed_contract'
            )->get();

        return datatables()->of($contracts)->toJson();
    }
    //

    public function permit(){
        $permits = permit::join('contracts', 'permits.contract', '=', 'contracts.id')
        ->join('contract_types', 'contracts.type_contract', '=', 'contract_types.id')
        ->select(
            // 'contract',
            'permits.id',
            'permit_number',
            'contract_number',
            'description_typeContract',
            'permit_start_date',
            'permit_end_date',
            'permit_code',
            'fuec_state',
            )->get();

        return datatables()->of($permits)->toJson();
    }
    //

    public function vehicle(){
        $vehicles = vehicle::join('vehicle_types', 'vehicles.vehicle_type', '=', 'vehicle_types.id')
        ->leftjoin('vehicle_classes', 'vehicles.infrastructure_vehicle', '=', 'vehicle_classes.id')
        ->leftjoin('dimension_rims', 'vehicles.dimension_rims', '=', 'dimension_rims.id')
        ->leftjoin('brake_types', 'vehicles.rear_brake_type', '=', 'brake_types.id')
        ->leftjoin('brake_types as front', 'vehicles.front_brake_type', '=', 'front.id')
        ->leftjoin('users', 'vehicles.owner_vehicle', '=', 'users.id')
        ->leftjoin('drivers', 'vehicles.driver_id', '=', 'drivers.id')
        ->leftjoin('users as v', 'drivers.user_id', '=', 'v.id')
        ->select(
        'vehicles.id',
        'plate_vehicle',
        'model_vehicle',
        'vehicle_type_name',
        'side_vehicle',
        'state_vehicle',
        'vehicle_class_description',
        'secure_end_date',
        'technomechanical_end_date',
        'internal_external_owner_type',
        DB::raw('CONCAT(users.firstname," ",users.lastname) As owner'),   
        DB::raw('CONCAT(v.firstname," ",v.lastname) As drive'),
        'brand_vehicle',
        'vehicle_chassis_number',
        'property_card_number',
        'cylinder_vehicle',
        'number_passenger',
        'certificate_extracontractual',
        'civil_contractual',
        'card_operation',
        'expiration_card_operation',
        'expiration_preventive',
        'admission_date',
        'vehicle_pickup_date',
        'engine_number',
        'service',
        'color_vehicle',
        'type_direction',
        'front_suspension',
        'rear_suspension',
        'type_rims',
        'brake_types.brake_Type_Description',
        'front.brake_Type_Description as front',
        'vahicle_photo_path',
            )->get();

        return datatables()->of($vehicles)->toJson();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Database;

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
            'eps_status',
            'date_eps',
            // 'blood_type',
            'blood_type_description',
            // 'pension',
            'description_pension',
            'pension_status',
            'date_pension',
            // 'layoffs',
            'description_layoffs',
            'status_layoffs',
            'date_layoffs',
            // 'arl',
            'description_arl',
            'arl_status',
            'arl_date',
            // 'compensationbox',
            'description_compensationbox',
            'compensationbox_status',
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
}

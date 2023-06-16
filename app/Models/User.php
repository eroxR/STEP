<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'email',
        'email_verified_at',
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_confirmed_at',
        'remember_token',
        'current_team_id',
        'profile_photo_path',
        'created_at',
        'updated_at',
        'identification',
        'identificationcard',
        'nit',
        'firstname',
        'secondname',
        'lastname',
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
        'arl Índice',
        'arl_status',
        'arl_date',
        'compensationbox',
        'compensationbox_status',
        'date_compensationbox',
        'user_state',
        'user_entry_date',
        'date_withdrawal_user',
        'charge',
        'usertype',
        'civil_status',
        'family_document_type',
        'family_names',
        'relationship',
        'family_address',
        'family_phone',
        'family_phone_cellular',
        'city_birth',
        'place_expedition_identificationcard',
        'identificationcard_family',
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
        'username ',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relación muchos a muchos
    public function contract()
    {
        return $this->belongsToMany('App\Models\contract');
    }

    //relación uno a muchos polimorfica
    public function documents()
    {
        return $this->morphMany('App\Models\document', 'documentable');
    }

    //relación uno a muchos
    public function historicalArl()
    {
        return $this->hasMany('App\Models\historicalArl');
    }

    //relación uno a muchos
    public function historicalLayoffs()
    {
        return $this->hasMany('App\Models\historicalLayoffs');
    }

    //relación uno a muchos
    public function historicalCompensationBox()
    {
        return $this->hasMany('App\Models\historicalCompensationBox');
    }

    //relación uno a muchos
    public function historicalEps()
    {
        return $this->hasMany('App\Models\historicalEps');
    }

    //relación uno a muchos
    public function historicalPension()
    {
        return $this->hasMany('App\Models\historicalPension');
    }

    //relación uno a muchos
    public function bonding()
    {
        return $this->belongsTo('App\Models\bonding');
    }

    //relación uno a muchos
    public function identification()
    {
        return $this->belongsTo('App\Models\identification');

        // return $this->belongsTo(identification::class);
    }

    //relación uno a muchos
    public function relationship()
    {
        return $this->belongsTo('App\Models\relationship');
    }

    //relación uno a muchos
    public function supplierCategory()
    {
        return $this->belongsTo('App\Models\supplierCategory');
    }

    //relación uno a muchos
    public function charge()
    {
        return $this->belongsTo('App\Models\charge');
    }

    //relación uno a muchos
    public function economicActivity()
    {
        return $this->belongsTo('App\Models\economicActivity');
    }

    //relación uno a muchos
    public function city()
    {
        return $this->belongsTo('App\Models\city');
    }

    //relación uno a muchos
    public function country()
    {
        return $this->belongsTo('App\Models\country');
    }

    //relación uno a muchos
    public function Province()
    {
        return $this->belongsTo('App\Models\Province');
    }

    //relación uno a muchos
    public function workArea()
    {
        return $this->belongsTo('App\Models\workArea');
    }

    //relación uno a muchos
    public function arl()
    {
        return $this->belongsTo('App\Models\arl');
    }

    //relación uno a muchos
    public function compensationBox()
    {
        return $this->belongsTo('App\Models\compensationBox');
    }

    //relación uno a muchos
    public function layoffs()
    {
        return $this->belongsTo('App\Models\layoffs');
    }

    //relación uno a muchos
    public function eps()
    {
        return $this->belongsTo('App\Models\eps');
    }

    //relación uno a muchos
    public function pension()
    {
        return $this->belongsTo('App\Models\pension');
    }

    //relación uno a muchos
    public function bloodType()
    {
        return $this->belongsTo('App\Models\bloodType');
    }

    //relación uno a muchos
    public function productsAndServices()
    {
        return $this->belongsTo('App\Models\productsAndServices');
    }

    //relación uno auno
    public function driver()
    {
        return $this->hasOne('App\Models\driver', 'user_id', 'user_id');
    }

    //relación uno a muchos
    public function vehicle()
    {
        return $this->hasMany('App\Models\vehicle');
    }

    //relación uno a muchos
    public function usertype()
    {
        return $this->belongsTo('App\Models\usertype');
    }
}

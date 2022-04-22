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
        'username',
        'email',
        'password',
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
           public function contract(){
            return $this->belongsToMany('App\Models\contract');
        }
    
        //relación uno a muchos polimorfica
        public function documents(){
            return $this->morphMany('App\Models\document', 'documentable');
        }
    
        //relación uno a muchos
        public function historical_arl(){
            return $this->hasMany('App\Models\historical_arl');
        }
    
        //relación uno a muchos
        public function historical_layoffs(){
            return $this->hasMany('App\Models\historical_layoffs');
        }
    
        //relación uno a muchos
        public function historical_compensation_box(){
            return $this->hasMany('App\Models\historical_compensation_box');
        }
    
        //relación uno a muchos
        public function historical_eps(){
            return $this->hasMany('App\Models\historical_eps');
        }
    
        //relación uno a muchos
        public function historical_pension(){
            return $this->hasMany('App\Models\historical_pension');
        }
    
        //relación uno a muchos
        public function bindings(){
            return $this->belongsTo('App\Models\bindingseses');
        }
    
        //relación uno a muchos
        public function identification(){
            return $this->belongsTo('App\Models\identification');
    
            // return $this->belongsTo(identification::class);
        }
    
       //relación uno a muchos
        public function relationship(){
            return $this->belongsTo('App\Models\relationshipes');
        }
    
        //relación uno a muchos
        public function supplier_category(){
            return $this->belongsTo('App\Models\supplier_categoryes');
        }
    
        //relación uno a muchos
        public function charges(){
            return $this->belongsTo('App\Models\chargess');
        }
    
        //relación uno a muchos
        public function economic_activity(){
            return $this->belongsTo('App\Models\economic_activitys');
        }
    
        //relación uno a muchos
        public function city(){
            return $this->belongsTo('App\Models\city');
        }
    
        //relación uno a muchos
        public function country(){
            return $this->belongsTo('App\Models\country');
        }
    
        //relación uno a muchos
        public function provinces(){
            return $this->belongsTo('App\Models\provinces');
        }
    
        //relación uno a muchos
        public function work_area(){
            return $this->belongsTo('App\Models\work_areas');
        }
    
        //relación uno a muchos
        public function arl(){
            return $this->belongsTo('App\Models\arl');
        }
    
        //relación uno a muchos
        public function compensation_box(){
            return $this->belongsTo('App\Models\compensation_box');
        }
    
        //relación uno a muchos
        public function layoffs(){
            return $this->belongsTo('App\Models\layoffs');
        }
    
        //relación uno a muchos
        public function eps(){
            return $this->belongsTo('App\Models\eps');
        }
    
        //relación uno a muchos
        public function pension(){
            return $this->belongsTo('App\Models\pension');
        }
    
        //relación uno a muchos
        public function blood_type(){
            return $this->belongsTo('App\Models\blood_types');
        }
    
        //relación uno a muchos
        public function products_services(){
            return $this->belongsTo('App\Models\products_servicess');
        }
    
        //relación uno auno
        public function driver(){
            return $this->hasOne('App\Models\driver', 'user_id', 'user_id');
        }
    
        //relación uno a muchos
        public function vehicle(){
            return $this->hasMany('App\Models\vehicle');
        }
    
        //relación uno a muchos
        public function usertype(){
            return $this->belongsTo('App\Models\usertype');
        }
}

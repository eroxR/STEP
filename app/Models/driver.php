<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;

       //relación muchos a muchos
       public function permit(){
        return $this->belongsToMany('App\Models\permit');
    }

    //relación muchos a muchos
    public function accident(){
        return $this->belongsToMany('App\Models\accident');
    }

     //relación uno a muchos polimorfica
     public function documents(){
        return $this->morphMany('App\Models\document', 'documentable');
    }

    //relación uno a muchos
    public function historicalFiveSensesDriving(){
        return $this->hasMany('App\Models\historicalFiveSensesDriving');
    }

    //relación uno a muchos
    public function historicalDistractions(){
        return $this->hasMany('App\Models\historicalDistractions');
    }

    //relación uno a muchos
    public function historicalDrugsAlchoolemia(){
        return $this->hasMany('App\Models\historicalDrugsAlchoolemia');
    }

    //relación uno a muchos
    public function historicalDrivingTest(){
        return $this->hasMany('App\Models\historicalDrivingTest');
    }

    //relación uno a muchos
    public function historicalLicense(){
        return $this->hasMany('App\Models\historicalLicense');
    }

    //relación uno a muchos
    public function historicalDefensiveDriving(){
        return $this->hasMany('App\Models\historicalDefensiveDriving');
    }

    //relación uno a muchos
    public function historicalDrivingMethods(){
        return $this->hasMany('App\Models\historicalDrivingMethods');
    }

    //relación uno a muchos
    public function historicalNormTransit(){
        return $this->hasMany('App\Models\historicalNormTransit');
    }

    //relación uno a muchos
    public function historicalLandTransportStandards(){
        return $this->hasMany('App\Models\historicalLandTransportStandards');
    }

    //relación uno a muchos
    public function historicalFirst_Aid(){
        return $this->hasMany('App\Models\historicalFirst_Aid');
    }

    //relación uno a muchos
    public function historicalFirstResponder(){
        return $this->hasMany('App\Models\historicalFirstResponder');
    }

    //relación uno a muchos
    public function historicalSafetyActivePassiveVehicles(){
        return $this->hasMany('App\Models\historicalSafetyActivePassiveVehicles');
    }

    //relación uno a muchos
    public function historicalRoadSafety(){
        return $this->hasMany('App\Models\historicalRoadSafety');
    }

    //relación uno a muchos
    public function historicalSimits(){
        return $this->hasMany('App\Models\historicalSimits');
    }

    //relación uno a muchos
    public function historicalTipsNormative(){
        return $this->hasMany('App\Models\historicalTipsNormative');
    }

    //relación muchos a muchos
    public function contract(){
        return $this->belongsToMany('App\Models\contract');
    }

    //relación uno a uno inversa
    public function user(){
        return $this->belongsTo('App\Models\user', 'user_id', 'user_id');
    }

    //relación uno a muchos
    public function vehicle(){
        return $this->hasMany('App\Models\vehicle');
    }

    //relación uno a uno inversa
    public function licenseCategory(){
        return $this->belongsTo('App\Models\licenseCategory');
    }

    protected $fillable = [
        'user_id',
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
        'driver_status',
        'Linked',

    ];

}

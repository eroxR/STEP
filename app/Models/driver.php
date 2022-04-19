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
    public function historical_Five_Senses_Driving(){
        return $this->hasMany('App\Models\historical_Five_Senses_Driving');
    }

    //relación uno a muchos
    public function historical_Distractions(){
        return $this->hasMany('App\Models\historical_Distractions');
    }

    //relación uno a muchos
    public function historical_Drugs_Alchoolemia(){
        return $this->hasMany('App\Models\historical_Drugs_Alchoolemia');
    }

    //relación uno a muchos
    public function historical_Driving_Test(){
        return $this->hasMany('App\Models\historical_Driving_Test');
    }

    //relación uno a muchos
    public function historical_License(){
        return $this->hasMany('App\Models\historical_License');
    }

    //relación uno a muchos
    public function historical_Defensive_Driving(){
        return $this->hasMany('App\Models\historical_Defensive_Driving');
    }

    //relación uno a muchos
    public function historical_Driving_Methods(){
        return $this->hasMany('App\Models\historical_Driving_Methods');
    }

    //relación uno a muchos
    public function historical_Norm_Transit(){
        return $this->hasMany('App\Models\historical_Norm_Transit');
    }

    //relación uno a muchos
    public function historical_Land_Transport_Standards(){
        return $this->hasMany('App\Models\historical_Land_Transport_Standards');
    }

    //relación uno a muchos
    public function historical_First_Aid(){
        return $this->hasMany('App\Models\historical_First_Aid');
    }

    //relación uno a muchos
    public function historical_First_Responder(){
        return $this->hasMany('App\Models\historical_First_Responder');
    }

    //relación uno a muchos
    public function historical_Safety_Active_Passive_Vehicles(){
        return $this->hasMany('App\Models\historical_Safety_Active_Passive_Vehicles');
    }

    //relación uno a muchos
    public function historical_road_safety(){
        return $this->hasMany('App\Models\historical_road_safety');
    }

    //relación uno a muchos
    public function historical_Simits(){
        return $this->hasMany('App\Models\historical_Simits');
    }

    //relación uno a muchos
    public function historical_Tips_Normative(){
        return $this->hasMany('App\Models\historical_Tips_Normative');
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
}

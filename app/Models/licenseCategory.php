<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class licenseCategory extends Model
{
    use HasFactory;

    //relación uno a uno
    public function driver(){
        return $this->hasMany('App\Models\driver');
    }

    //relación uno a uno
    public function historical_License(){
        return $this->hasMany('App\Models\historical_License');
    }    
}

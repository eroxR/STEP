<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eps extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function historical_eps(){
            return $this->hasMany('App\Models\historical_eps');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compensation_box extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function historical_compensation_box(){
            return $this->hasMany('App\Models\historical_compensation_box');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }
}

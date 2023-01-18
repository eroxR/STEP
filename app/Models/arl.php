<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arl extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function historical_arl(){
            return $this->hasMany('App\Models\historical_arl');
        }
        
            //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }    
}

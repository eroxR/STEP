<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pension extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function historical_pension(){
            return $this->hasMany('App\Models\historical_pension');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }
}

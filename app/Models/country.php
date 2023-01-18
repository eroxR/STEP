<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function provinces(){
            return $this->hasMany('App\Models\provinces');
        }
    
        //relación uno a muchos
        public function city(){
            return $this->hasMany('App\Models\city');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }    
}

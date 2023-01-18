<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identification extends Model
{
    use HasFactory;

        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }
    
        //relación uno a muchos inversa
        public function contract(){
            return $this->hasMany('App\Models\contract');
        }
    
        //relación uno a muchos inversa
        public function passenger(){
            return $this->hasMany('App\Models\passenger');
        }    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

        //relación uno a muchos inversa
        public function country(){
            return $this->belongsTo('App\Models\country');
        }
    
        //relación uno a muchos inversa
        public function provinces(){
            return $this->belongsTo('App\Models\provinces');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }
}

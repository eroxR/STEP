<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

        //relación muchos a muchos
        public function permit(){
            return $this->belongsToMany('App\Models\permit');
        }
    
        //relación muchos a muchos
        public function contract(){
            return $this->belongsToMany('App\Models\contract');
        }
    
        //relación muchos a muchos
        public function accident(){
            return $this->belongsToMany('App\Models\accident');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->belongsTo('App\Models\user');
        }
    
        //relación uno a muchos inversa
        public function vehicle_type(){
            return $this->belongsTo('App\Models\vehicle_type');
        }
    
        //relación uno a muchos inversa
        public function vehicle_class(){
            return $this->belongsTo('App\Models\vehicle_class');
        }
    
        //relación uno a muchos inversa
        public function driver(){
            return $this->belongsTo('App\Models\driver');
        }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;

        //relación muchos a muchos
        public function user(){
            return $this->belongsToMany('App\Models\user');
        }
    
        //relación muchos a muchos
        public function vehicle(){
            return $this->belongsToMany('App\Models\vehicle');
        }
    
        //relación uno a muchos polimorfica
         public function documents(){
             return $this->morphMany('App\Models\document', 'documentable');
         }
    
         //relación muchos a muchos
        public function driver(){
            return $this->belongsToMany('App\Models\driver');
        }
    
        //relación uno a muchos
        public function passenger(){
            return $this->hasMany('App\Models\passenger');
        }
    
        //relación uno a muchos inversa
        public function contract_type(){
            return $this->belongsTo('App\Models\contract_type');
        }
    
        //relación uno a muchos inversa
        public function payment_type(){
            return $this->belongsTo('App\Models\payment_type');
        }
    
        //relación uno a muchos inversa
        public function identification(){
            return $this->belongsTo('App\Models\identification');
        }
    
        //relación uno a muchos
        public function permit(){
            return $this->hasMany('App\Models\permit');
        }
}

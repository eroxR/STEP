<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    use HasFactory;

        //relación uno a muchos inversa
        public function permit(){
            return $this->belongsTo('App\Models\permit');
        }
    
        //relación uno a muchos inversa
        public function contract(){
            return $this->belongsTo('App\Models\contract');
        }
    
        //relación uno a muchos
        public function identification(){
            return $this->belongsTo('App\Models\identification');
        }
}

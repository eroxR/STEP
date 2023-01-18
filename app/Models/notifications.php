<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function alertStatus(){
            return $this->belongsTo('App\Models\alertStatus');
        }
    
        //relación uno a muchos
        public function alertType(){
            return $this->belongsTo('App\Models\alertType');
        }    
}

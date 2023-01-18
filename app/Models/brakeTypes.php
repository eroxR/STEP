<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brakeTypes extends Model
{
    use HasFactory;

        //relación uno a muchos inversa
        public function vehicle(){
            return $this->hasMany('App\Models\vehicle');
        }    
}

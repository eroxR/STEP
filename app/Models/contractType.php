<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contractType extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function contract(){
            return $this->hasMany('App\Models\contract');
        }    
}

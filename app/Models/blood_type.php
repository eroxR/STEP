<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_type extends Model
{
    use HasFactory;

        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }
}

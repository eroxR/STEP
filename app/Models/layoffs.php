<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layoffs extends Model
{
    use HasFactory;

        //relación uno a muchos
        public function historical_layoffs(){
            return $this->hasMany('App\Models\historical_layoffs');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->hasMany('App\Models\user');
        }
}

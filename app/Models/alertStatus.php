<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alertStatus extends Model
{
    use HasFactory;
    
        //relación uno a muchos
        public function notifications(){
            return $this->hasMany('App\Models\notifications');
        }
}

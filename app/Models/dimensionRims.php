<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dimensionRims extends Model
{
    use HasFactory;

    //relación uno a muchos 
    public function vehicle()
    {
        return $this->hasMany('App\Models\vehicle');
    }    
}

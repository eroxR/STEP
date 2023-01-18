<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accident extends Model
{
    use HasFactory;
    
        	//relación muchos a muchos
            public function driver(){
                return $this->belongsToMany('App\Models\driver');
            }
        
            //relación muchos a muchos
            public function vehicle(){
                return $this->belongsToMany('App\Models\vehicle');
            }
}

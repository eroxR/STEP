<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educational_level extends Model
{
    use HasFactory;

        //relación uno a muchos inversa
        public function user(){
            return $this->belongsTo('App\Models\user');
        }
}

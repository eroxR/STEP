<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historicalFirst_Aid extends Model
{
    use HasFactory;

        //relación uno a muchos polimorfica
        public function documents(){
            return $this->morphMany('App\Models\document', 'documentable');
        }
    
        //relación uno a muchos inversa
        public function driver(){
            return $this->belongsTo('App\Models\driver');
        }

        protected $fillable = [
            'driver_id',	
            'First_Aid_certification',
        ];    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historicalLicense extends Model
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

        //relación uno a uno inversa
        public function LicenseCategory(){
            return $this->belongsTo('App\Models\LicenseCategory');
        }

        protected $fillable = [
            'driver_id',	
            'license_number',	
            'license_category',	
            'license_expiration',
        ];    
}

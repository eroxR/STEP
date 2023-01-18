<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historicalCertificateExtracontractual extends Model
{
    use HasFactory;

        //relación uno a muchos polimorfica
        public function documents(){
            return $this->morphMany('App\Models\document', 'documentable');
        }
    
        //relación uno a muchos inversa
        public function vehicle(){
            return $this->belongsTo('App\Models\vehicle');
        }
    
        protected $fillable = [
  
            'certificate_extracontractual',
            'vehicle_id',
        ];    
}

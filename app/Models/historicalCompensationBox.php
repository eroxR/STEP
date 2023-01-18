<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historicalCompensationBox extends Model
{
    use HasFactory;

        //relación uno a muchos polimorfica
        public function documents(){
            return $this->morphMany('App\Models\document', 'documentable');
        }
    
        //relación uno a muchos inversa
        public function user(){
            return $this->belongsTo('App\Models\user');
        }
    
        //relación uno a muchos inversa
        public function compensation_box(){
            return $this->belongsTo('App\Models\compensation_box');
        }

        protected $fillable = [
            'user_id',	
            'id_compensationbox',	
            'renewal_date',
        ];    
}

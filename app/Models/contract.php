<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;

        //relación muchos a muchos
        public function user(){
            return $this->belongsToMany('App\Models\user');
        }
    
        //relación muchos a muchos
        public function vehicle(){
            return $this->belongsToMany('App\Models\vehicle');
        }
    
        //relación uno a muchos polimorfica
         public function documents(){
             return $this->morphMany('App\Models\document', 'documentable');
         }
    
         //relación muchos a muchos
        public function driver(){
            return $this->belongsToMany('App\Models\driver');
        }
    
        //relación uno a muchos
        public function passenger(){
            return $this->hasMany('App\Models\passenger');
        }
    
        //relación uno a muchos inversa
        public function contract_type(){
            return $this->belongsTo('App\Models\contract_type');
        }
    
        //relación uno a muchos inversa
        public function payment_type(){
            return $this->belongsTo('App\Models\payment_type');
        }
    
        //relación uno a muchos inversa
        public function identification(){
            return $this->belongsTo('App\Models\identification');
        }
    
        //relación uno a muchos
        public function permit(){
            return $this->hasMany('App\Models\permit');
        }

        protected $fillable = [
            'contract_number',			
            'type_contract',

            'route_trip_contract',
            'date_start_contract',
            'contract_end_date',
            'contract_value',
            'contracting_name',
            'state_contract',
            'identification',
            'contract_document',
            'expedition_identificationcard',
            'contracting_phone',
            'contracting_direction',
            'legal_representative',
            'legal_representative_expedition_identificationcard',
            'passenger_quantity',
            'total_disposition',
            'quantity_vehicle',
            'cooperation_contract',
            'secure_policy',
            'tipe_pay',
            'contract_signing_date',
            'school_name',
            'address_school',
            'school_year',
            'contract_with',
            'identification_represent_legal',
            'identificationcard_represent_legal',
            'identificationcard_representative_group',
            'group_representative_name',
            'dateofexpedition_representative_group',
            'signed_contract',
            'created_at',
            'updated_at',
            'student_name',
            'identificationcard_estudent',
            'grade_student',
            'family_relationship',
            'signature_place',
            'start_day',
            'End_day',
            'exit_contract',
			'arrival_contract',
			'return_contract',
            'municipality',
            'legal_bond',

        ];    
}

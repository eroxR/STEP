<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function permit()
    {
        return $this->belongsToMany('App\Models\permit');
    }

    //relación muchos a muchos
    public function contract()
    {
        return $this->belongsToMany('App\Models\contract');
    }

    //relación muchos a muchos
    public function accident()
    {
        return $this->belongsToMany('App\Models\accident');
    }

    //relación uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }

    //relación uno a muchos inversa
    public function vehicleType()
    {
        return $this->belongsTo('App\Models\vehicleType');
    }

    //relación uno a muchos inversa
    public function vehicleClass()
    {
        return $this->belongsTo('App\Models\vehicleClass');
    }

    //relación uno a muchos inversa
    public function driver()
    {
        return $this->belongsTo('App\Models\driver');
    }

    //relación uno a muchos inversa
    public function dimensionRims()
    {
        return $this->belongsTo('App\Models\dimensionRims');
    }

    //relación uno a muchos polimorfica
    public function documents()
    {
        return $this->morphMany('App\Models\document', 'documentable');
    }

    protected $fillable = [
            'plate_vehicle',
			'brand_vehicle',
			'model_vehicle',
			'vehicle_chassis_number',
			'property_card_number',
			'cylinder_vehicle',
			'vehicle_type',
			'side_vehicle',
			'owner_vehicle',
			'driver_id',
			'number_passenger',
			'secure_end_date',
			'technomechanical_end_date',
			'certificate_extracontractual',
			'civil_contractual',
			'internal_external_owner_type',
			'infrastructure_vehicle',
			'state_vehicle',
			'card_operation',
			'expiration_card_operation',
			'expiration_preventive',
			'admission_date',
            'vehicle_pickup_date',
			'engine_number',
			'service',
			'color_vehicle',
			'type_direction',
			'front_suspension',
			'rear_suspension',
			'dimension_rims',
			'rear_brake_type',
			'front_brake_type',
			'binding_contract',
			'vahicle_photo_path',
    ];
}

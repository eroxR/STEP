<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permitContingency extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function driver()
    {
        return $this->belongsToMany(driver::class);
    }

    //relación muchos a muchos
    public function vehicle()
    {
        return $this->belongsToMany(vehicle::class);
    }

    //relación uno a muchos polimorfica
    public function documents()
    {
        return $this->morphMany('App\Models\document', 'documentable');
    }

    //relación uno a muchos
    public function passenger()
    {
        return $this->hasMany('App\Models\passenger');
    }

    //relación uno a muchos inversa
    public function contract()
    {
        return $this->belongsTo('App\Models\contract');
    }

    protected $fillable = [
        'contract',
        'permit_start_date',
        'permit_end_date',
        'permit_number',
        'fuec_state',
        'permit_code',
    ];
}

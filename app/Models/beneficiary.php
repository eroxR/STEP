<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiary extends Model
{
    use HasFactory;

        //relación muchos a muchos polimorfica
        public function beneficiary(){
            return $this->morphTo();
        }

    protected $fillable = [

        'full_name',
		'document',
		'user_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dofa extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'capacidad_factor',
        'contexto',
    ];
}

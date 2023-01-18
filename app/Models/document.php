<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    	//relación muchos a muchos polimorfica
        public function documento(){
            return $this->morphTo();
        }

        protected $fillable = [

            'documentable_id',
			'document_name',
			'extension',
			'directory',
			'documentable_Type',
        ];    
}

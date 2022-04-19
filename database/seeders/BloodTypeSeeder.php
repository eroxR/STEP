<?php

namespace Database\Seeders;

use App\Models\blood_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tipoSangre1 = new blood_type();
        $tipoSangre1->blood_type_description= "O-";
        $tipoSangre1->save();
        
        $tipoSangre2 = new blood_type();
        $tipoSangre2->blood_type_description= "O+";
        $tipoSangre2->save();
        
        $tipoSangre3 = new blood_type();
        $tipoSangre3->blood_type_description= "A-";
        $tipoSangre3->save();
        
        $tipoSangre4 = new blood_type();
        $tipoSangre4->blood_type_description= "A+";
        $tipoSangre4->save();
        
        $tipoSangre5 = new blood_type();
        $tipoSangre5->blood_type_description= "B-";
        $tipoSangre5->save();
        
        $tipoSangre6 = new blood_type();
        $tipoSangre6->blood_type_description= "B+";
        $tipoSangre6->save();
        
        $tipoSangre7 = new blood_type();
        $tipoSangre7->blood_type_description= "AB-";
        $tipoSangre7->save();
        
        $tipoSangre8 = new blood_type();
        $tipoSangre8->blood_type_description= "AB+";
        $tipoSangre8->save();
    }
}

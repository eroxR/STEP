<?php

namespace Database\Seeders;

use App\Models\bloodType;
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
        $tipoSangre1 = new bloodType();
        $tipoSangre1->blood_type_description= "O-";
        $tipoSangre1->save();
        
        $tipoSangre2 = new bloodType();
        $tipoSangre2->blood_type_description= "O+";
        $tipoSangre2->save();
        
        $tipoSangre3 = new bloodType();
        $tipoSangre3->blood_type_description= "A-";
        $tipoSangre3->save();
        
        $tipoSangre4 = new bloodType();
        $tipoSangre4->blood_type_description= "A+";
        $tipoSangre4->save();
        
        $tipoSangre5 = new bloodType();
        $tipoSangre5->blood_type_description= "B-";
        $tipoSangre5->save();
        
        $tipoSangre6 = new bloodType();
        $tipoSangre6->blood_type_description= "B+";
        $tipoSangre6->save();
        
        $tipoSangre7 = new bloodType();
        $tipoSangre7->blood_type_description= "AB-";
        $tipoSangre7->save();
        
        $tipoSangre8 = new bloodType();
        $tipoSangre8->blood_type_description= "AB+";
        $tipoSangre8->save();
    }
}

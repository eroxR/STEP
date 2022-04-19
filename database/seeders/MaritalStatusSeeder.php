<?php

namespace Database\Seeders;

use App\Models\marital_status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estadocivil1 = new marital_status();
        $estadocivil1->description_maritalstatus= "Soltero/a";
        $estadocivil1->save();
        
        $estadocivil2 = new marital_status();
        $estadocivil2->description_maritalstatus= "Casado/a";
        $estadocivil2->save();
        
        $estadocivil3 = new marital_status();
        $estadocivil3->description_maritalstatus= "Unión libre o unión de hecho";
        $estadocivil3->save();
        
        $estadocivil4 = new marital_status();
        $estadocivil4->description_maritalstatus= "Separado/a";
        $estadocivil4->save();
        
        $estadocivil5 = new marital_status();
        $estadocivil5->description_maritalstatus= "Divorciado/a";
        $estadocivil5->save();
        
        $estadocivil6 = new marital_status();
        $estadocivil6->description_maritalstatus= "Viudo/a";
        $estadocivil6->save();
    }
}

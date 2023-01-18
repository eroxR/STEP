<?php

namespace Database\Seeders;

use App\Models\brakeTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrakeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipoFreno1 = new brakeTypes();
        $tipoFreno1->brake_Type_Description= "Frenos de disco";
        $tipoFreno1->save();
        
        $tipoFreno2 = new brakeTypes();
        $tipoFreno2->brake_Type_Description= "Frenos de tambor";
        $tipoFreno2->save();
        
        $tipoFreno3 = new brakeTypes();
        $tipoFreno3->brake_Type_Description= "Frenos ABS";
        $tipoFreno3->save();
        
        $tipoFreno4 = new brakeTypes();
        $tipoFreno4->brake_Type_Description= "Freno de mano ";
        $tipoFreno4->save();
        
    }
}

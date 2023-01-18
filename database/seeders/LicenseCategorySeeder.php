<?php

namespace Database\Seeders;

use App\Models\licenseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LicenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $licenceCategory1 = new licenseCategory();
        $licenceCategory1->code_licenseCategory="A1";
        $licenceCategory1->description_licenseCategory="Motocicletas con cilindrada hasta 125 c.c.";
        $licenceCategory1->save();
        
        $licenceCategory2 = new licenseCategory();
        $licenceCategory2->code_licenseCategory="A2";
        $licenceCategory2->description_licenseCategory="Motocicletas, motocicletas y moto triciclos con cilindrada mayor a 125 c.c.";
        $licenceCategory2->save();
        
        $licenceCategory3 = new licenseCategory();
        $licenceCategory3->code_licenseCategory="B1";
        $licenceCategory3->description_licenseCategory="Automóviles, motocarros, cuatrimotos, camperos, camionetas y microbuses de servicio particular.";
        $licenceCategory3->save();

        $licenceCategory4 = new licenseCategory();
        $licenceCategory4->code_licenseCategory="B2";
        $licenceCategory4->description_licenseCategory="Camiones rígidos, busetas y buses de servicio particular.";
        $licenceCategory4->save();
        
        $licenceCategory5 = new licenseCategory();
        $licenceCategory5->code_licenseCategory="B3";
        $licenceCategory5->description_licenseCategory="Vehículos articulados servicio particular.";
        $licenceCategory5->save();
        
        $licenceCategory6 = new licenseCategory();
        $licenceCategory6->code_licenseCategory="C1";
        $licenceCategory6->description_licenseCategory="Automóviles, camperos, camionetas y microbuses de servicio público.";
        $licenceCategory6->save();

        $licenceCategory7 = new licenseCategory();
        $licenceCategory7->code_licenseCategory="C2";
        $licenceCategory7->description_licenseCategory="Camiones rígidos, busetas y buses de servicio público.";
        $licenceCategory7->save();
        
        $licenceCategory8 = new licenseCategory();
        $licenceCategory8->code_licenseCategory="C3";
        $licenceCategory8->description_licenseCategory="Vehículos articulados servicio público.";
        $licenceCategory8->save();
    }
}

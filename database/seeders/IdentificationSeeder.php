<?php

namespace Database\Seeders;

use App\Models\identification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $identificacion1 = new identification();
        $identificacion1->description_identification= "Cedula de Ciudadania";
        $identificacion1->save();
        
        $identificacion2 = new identification();
        $identificacion2->description_identification= "Cedula de Extranjeria";
        $identificacion2->save();
        
        $identificacion3 = new identification();
        $identificacion3->description_identification= "Documento Definido para información Exógena";
        $identificacion3->save();
        
        $identificacion4 = new identification();
        $identificacion4->description_identification= "Nit";
        $identificacion4->save();
        
        $identificacion5 = new identification();
        $identificacion5->description_identification= "Pasaporte";
        $identificacion5->save();
        
        $identificacion6 = new identification();
        $identificacion6->description_identification= "Registro Civil";
        $identificacion6->save();
        
        $identificacion7 = new identification();
        $identificacion7->description_identification= "Tarjeta de Extranjeria";
        $identificacion7->save();
        
        $identificacion8 = new identification();
        $identificacion8->description_identification= "Tarjeta de Identidad";
        $identificacion8->save();
        
        $identificacion9 = new identification();
        $identificacion9->description_identification= "Tipo de Documento Extranjero";
        $identificacion9->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\binding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vinculacionLaboral1 = new binding();
        $vinculacionLaboral1->binding_type_description= "Contrato a Término Fijo";
        $vinculacionLaboral1->save();
        
        $vinculacionLaboral2 = new binding();
        $vinculacionLaboral2->binding_type_description= "Contrato a término indefinido";
        $vinculacionLaboral2->save();
        
        $vinculacionLaboral3 = new binding();
        $vinculacionLaboral3->binding_type_description= "Contrato de Obra o labor";
        $vinculacionLaboral3->save();
        
        $vinculacionLaboral4 = new binding();
        $vinculacionLaboral4->binding_type_description= "Contrato civil por prestación de servicios";
        $vinculacionLaboral4->save();
        
        $vinculacionLaboral5 = new binding();
        $vinculacionLaboral5->binding_type_description= "Contrato de aprendizaje";
        $vinculacionLaboral5->save();
        
        $vinculacionLaboral6 = new binding();
        $vinculacionLaboral6->binding_type_description= "Contrato ocasional de trabajo";
        $vinculacionLaboral6->save();
    }
}

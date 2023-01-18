<?php

namespace Database\Seeders;

use App\Models\bonding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BondingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vinculacionLaboral1 = new bonding();
        $vinculacionLaboral1->bonding_type_description= "Contrato a Término Fijo";
        $vinculacionLaboral1->save();
        
        $vinculacionLaboral2 = new bonding();
        $vinculacionLaboral2->bonding_type_description= "Contrato a término indefinido";
        $vinculacionLaboral2->save();
        
        $vinculacionLaboral3 = new bonding();
        $vinculacionLaboral3->bonding_type_description= "Contrato de Obra o labor";
        $vinculacionLaboral3->save();
        
        $vinculacionLaboral4 = new bonding();
        $vinculacionLaboral4->bonding_type_description= "Contrato civil por prestación de servicios";
        $vinculacionLaboral4->save();
        
        $vinculacionLaboral5 = new bonding();
        $vinculacionLaboral5->bonding_type_description= "Contrato de aprendizaje";
        $vinculacionLaboral5->save();
        
        $vinculacionLaboral6 = new bonding();
        $vinculacionLaboral6->bonding_type_description= "Contrato ocasional de trabajo";
        $vinculacionLaboral6->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\arl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $arl1 = new arl();
        $arl1->description_arl="ARL Sura";
        $arl1->save();
        
        $arl2 = new arl();
        $arl2->description_arl="Aseguradora de Vida Colseguros";
        $arl2->save();
        
        $arl3 = new arl();
        $arl3->description_arl="BBVA Seguros de Vida";
        $arl3->save();
        
        $arl4 = new arl();
        $arl4->description_arl="Colmena S.A.  Seguros";
        $arl4->save();
        
        $arl5 = new arl();
        $arl5->description_arl="Colpatria Seguros S.A";
        $arl5->save();
        
        $arl6 = new arl();
        $arl6->description_arl="Compañia Agricola de seguros de Vida";
        $arl6->save();
        
        $arl7 = new arl();
        $arl7->description_arl="Compañia Central de Seguros";
        $arl7->save();
        
        $arl8 = new arl();
        $arl8->description_arl="Compañia de Seguros de Vida Aurora S.A.";
        $arl8->save();
        
        $arl9 = new arl();
        $arl9->description_arl="La Equidad Seguros ";
        $arl9->save();
        
        $arl10 = new arl();
        $arl10->description_arl="La Previsora Vida S.A.";
        $arl10->save();
        
        $arl11 = new arl();
        $arl11->description_arl="Liberty Seguros S.A.";
        $arl11->save();
        
        $arl12 = new arl();
        $arl12->description_arl="Mapfre Colombia Vida Seguros S.A.";
        $arl12->save();
        
        $arl13 = new arl();
        $arl13->description_arl="Positiva Compañia de Seguros";
        $arl13->save();
        
        $arl14 = new arl();
        $arl14->description_arl="Seguros Bolivar S.A.";
        $arl14->save();
        
        $arl15 = new arl();
        $arl15->description_arl="Seguros de Vida ALFA S.A.";
        $arl15->save();
        
        $arl16 = new arl();
        $arl16->description_arl="Seguros de Vida del Estado";
        $arl16->save();
    }
}

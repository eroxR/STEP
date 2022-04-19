<?php

namespace Database\Seeders;

use App\Models\layoffs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayoffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $cesantias1 = new layoffs();
        $cesantias1->description_layoffs="Askandia S.A.";
        $cesantias1->save();
        
        $cesantias2 = new layoffs();
        $cesantias2->description_layoffs="Cesantías de Colombia S.A.";
        $cesantias2->save();
        
        $cesantias3 = new layoffs();
        $cesantias3->description_layoffs="Colfondos";
        $cesantias3->save();
        
        $cesantias4 = new layoffs();
        $cesantias4->description_layoffs="Colmena";
        $cesantias4->save();
        
        $cesantias5 = new layoffs();
        $cesantias5->description_layoffs="Colpatria";
        $cesantias5->save();
        
        $cesantias6 = new layoffs();
        $cesantias6->description_layoffs="Collayoffses";
        $cesantias6->save();
        
        $cesantias7 = new layoffs();
        $cesantias7->description_layoffs="Davivir S.A.";
        $cesantias7->save();
        
        $cesantias8 = new layoffs();
        $cesantias8->description_layoffs="Dinners S.A.";
        $cesantias8->save();
        
        $cesantias9 = new layoffs();
        $cesantias9->description_layoffs="Fondo Nacional del Ahorro";
        $cesantias9->save();
        
        $cesantias10 = new layoffs();
        $cesantias10->description_layoffs="Granfondo S.A.";
        $cesantias10->save();
        
        $cesantias11 = new layoffs();
        $cesantias11->description_layoffs="Invermañana";
        $cesantias11->save();
        
        $cesantias12 = new layoffs();
        $cesantias12->description_layoffs="Invertir";
        $cesantias12->save();
        
        $cesantias13 = new layoffs();
        $cesantias13->description_layoffs="Old Mutual";
        $cesantias13->save();
        
        $cesantias14 = new layoffs();
        $cesantias14->description_layoffs="Porvenir S.A.";
        $cesantias14->save();
        
        $cesantias15 = new layoffs();
        $cesantias15->description_layoffs="Protección S.A.";
        $cesantias15->save();
    }
}

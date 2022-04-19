<?php

namespace Database\Seeders;

use App\Models\eps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fondosalud1 = new eps();
        $fondosalud1->description_eps="ALIANSALUD";
        $fondosalud1->save();
        
        $fondosalud2 = new eps();
        $fondosalud2->description_eps="AMBUQ";
        $fondosalud2->save();
        
        $fondosalud3 = new eps();
        $fondosalud3->description_eps="ASMET SALUD";
        $fondosalud3->save();
        
        $fondosalud4 = new eps();
        $fondosalud4->description_eps="CAFE SALUD";
        $fondosalud4->save();
        
        $fondosalud5 = new eps();
        $fondosalud5->description_eps="CAPITAL SALUD";
        $fondosalud5->save();
        
        $fondosalud6 = new eps();
        $fondosalud6->description_eps="COMPARTA";
        $fondosalud6->save();
        
        $fondosalud7 = new eps();
        $fondosalud7->description_eps="COMPENSAR";
        $fondosalud7->save();
        
        $fondosalud8 = new eps();
        $fondosalud8->description_eps="COOMEVA";
        $fondosalud8->save();
        
        $fondosalud9 = new eps();
        $fondosalud9->description_eps="COOSALUD";
        $fondosalud9->save();
        
        $fondosalud10 = new eps();
        $fondosalud10->description_eps="CRUZ BLANCA";
        $fondosalud10->save();
        
        $fondosalud11 = new eps();
        $fondosalud11->description_eps="EMSSANAR";
        $fondosalud11->save();
        
        $fondosalud12 = new eps();
        $fondosalud12->description_eps="FAMISANAR";
        $fondosalud12->save();
        
        $fondosalud13 = new eps();
        $fondosalud13->description_eps="MEDIMAS";
        $fondosalud13->save();
        
        $fondosalud14 = new eps();
        $fondosalud14->description_eps="MUTUAL SER";
        $fondosalud14->save();
        
        $fondosalud15 = new eps();
        $fondosalud15->description_eps="NUEVA EPS";
        $fondosalud15->save();
        
        $fondosalud16 = new eps();
        $fondosalud16->description_eps="SALUD TOTAL";
        $fondosalud16->save();
        
        $fondosalud17 = new eps();
        $fondosalud17->description_eps="SALUDVIDA";
        $fondosalud17->save();
        
        $fondosalud18 = new eps();
        $fondosalud18->description_eps="SANITAS";
        $fondosalud18->save();
        
        $fondosalud19 = new eps();
        $fondosalud19->description_eps="SAVIA SALUD";
        $fondosalud19->save();
        
        $fondosalud20 = new eps();
        $fondosalud20->description_eps="SERVICIO OCCIDENTAL DE SALUD S.O.S";
        $fondosalud20->save();
        
        $fondosalud21 = new eps();
        $fondosalud21->description_eps="SURA";
        $fondosalud21->save();
    }
}

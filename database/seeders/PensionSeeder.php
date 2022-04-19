<?php

namespace Database\Seeders;

use App\Models\pension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fondoPension1 = new pension();
        $fondoPension1->description_pension="Askandia S.A.";
        $fondoPension1->save();
        
        $fondoPension2 = new pension();
        $fondoPension2->description_pension="Cesantías de Colombia S.A.";
        $fondoPension2->save();
        
        $fondoPension3 = new pension();
        $fondoPension3->description_pension="Colfondos";
        $fondoPension3->save();
        
        $fondoPension4 = new pension();
        $fondoPension4->description_pension="Colmena";
        $fondoPension4->save();
        
        $fondoPension5 = new pension();
        $fondoPension5->description_pension="Colpatria";
        $fondoPension5->save();
        
        $fondoPension6 = new pension();
        $fondoPension6->description_pension="Colpensiones";
        $fondoPension6->save();
        
        $fondoPension7 = new pension();
        $fondoPension7->description_pension="Davivir S.A.";
        $fondoPension7->save();
        
        $fondoPension8 = new pension();
        $fondoPension8->description_pension="Dinners S.A.";
        $fondoPension8->save();
        
        $fondoPension9 = new pension();
        $fondoPension9->description_pension="Fondo Nacional del Ahorro";
        $fondoPension9->save();
        
        $fondoPension10 = new pension();
        $fondoPension10->description_pension="Granfondo S.A.";
        $fondoPension10->save();
        
        $fondoPension11 = new pension();
        $fondoPension11->description_pension="Invermañana";
        $fondoPension11->save();
        
        $fondoPension12 = new pension();
        $fondoPension12->description_pension="Invertir";
        $fondoPension12->save();
        
        $fondoPension13 = new pension();
        $fondoPension13->description_pension="Old Mutual";
        $fondoPension13->save();
        
        $fondoPension14 = new pension();
        $fondoPension14->description_pension="Porvenir S.A.";
        $fondoPension14->save();
        
        $fondoPension15 = new pension();
        $fondoPension15->description_pension="Protección S.A.";
        $fondoPension15->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\charge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-
        $cargo1 = new charge();
        $cargo1->code_charge="MO";
        $cargo1->description_charge="Monitor(a)";
        $cargo1->save();
        
        $cargo2 = new charge();
        $cargo2->code_charge="COP";
        $cargo2->description_charge="Coodinador(a) Operativo";
        $cargo2->save();
        
        $cargo3 = new charge();
        $cargo3->code_charge="CR";
        $cargo3->description_charge="Coordinador(a) de Recursos Humanos e Infraestructura";
        $cargo3->save();

        // mantenimiento de usuario
        // mantenimiento de vehiculos -- infractuctura
        
        $cargo4 = new charge();
        $cargo4->code_charge="CAO";
        $cargo4->description_charge="Coordinador(a) Compras y Suministros";
        $cargo4->save();
        
        $cargo5 = new charge();
        $cargo5->code_charge="CO";
        $cargo5->description_charge="Conductor(a)";
        $cargo5->save();
        
        $cargo6 = new charge();
        $cargo6->code_charge="CSG";
        $cargo6->description_charge="Coordinador(a) Sistemas de Gestión";
        $cargo6->save();
        
        $cargo7 = new charge();
        $cargo7->code_charge="GA";
        $cargo7->description_charge="Gerente General";
        $cargo7->save();
        
        $cargo8 = new charge();
        $cargo8->code_charge="AU";
        $cargo8->description_charge="Auditor(a) Interno";
        $cargo8->save();
    }
}

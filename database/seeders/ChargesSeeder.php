<?php

namespace Database\Seeders;

use App\Models\charges;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $cargo1 = new charges();
        $cargo1->code_charge="MO";
        $cargo1->description_charges="Monitor(a)";
        $cargo1->save();
        
        $cargo2 = new charges();
        $cargo2->code_charge="COP";
        $cargo2->description_charges="Coodinador(a) Operativo";
        $cargo2->save();
        
        $cargo3 = new charges();
        $cargo3->code_charge="CR";
        $cargo3->description_charges="Coordinador(a) de Recursos";
        $cargo3->save();
        
        $cargo4 = new charges();
        $cargo4->code_charge="CAO";
        $cargo4->description_charges="Coordinador(a) Compras y Suministros";
        $cargo4->save();
        
        $cargo5 = new charges();
        $cargo5->code_charge="CO";
        $cargo5->description_charges="Conductor(a)";
        $cargo5->save();
        
        $cargo6 = new charges();
        $cargo6->code_charge="CSG";
        $cargo6->description_charges="Coordinador(a) Sistemas de Gestión";
        $cargo6->save();
        
        $cargo7 = new charges();
        $cargo7->code_charge="GA";
        $cargo7->description_charges="Gerente General";
        $cargo7->save();
        
        $cargo8 = new charges();
        $cargo8->code_charge="AU";
        $cargo8->description_charges="Auditor(a) Interno";
        $cargo8->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\contract_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipoContrato1 = new  contract_type();
        $tipoContrato1->description_typeContract="Colegios";
        $tipoContrato1->save();
        
        $tipoContrato2 = new contract_type();
        $tipoContrato2->description_typeContract="Empresas";
        $tipoContrato2->save();
        
        $tipoContrato3 = new contract_type();
        $tipoContrato3->description_typeContract="Empresa Turismo";
        $tipoContrato3->save();
        
        $tipoContrato4 = new contract_type();
        $tipoContrato4->description_typeContract="Ocacionales";
        $tipoContrato4->save();
        
        $tipoContrato5 = new contract_type();
        $tipoContrato5->description_typeContract="Usuarios de Servicios de Salud";
        $tipoContrato5->save();
    }
}

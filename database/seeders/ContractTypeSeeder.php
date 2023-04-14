<?php

namespace Database\Seeders;

use App\Models\contractType;
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
        $tipoContrato1 = new  contractType();
        $tipoContrato1->description_typeContract="Contrato para transporte de estudiantes";
        $tipoContrato1->contract_name="Colegios";
        $tipoContrato1->save();
        
        $tipoContrato2 = new contractType();
        $tipoContrato2->description_typeContract="Contrato para transporte empresarial";
        $tipoContrato2->contract_name="Empresas";
        $tipoContrato2->save();
        
        $tipoContrato3 = new contractType();
        $tipoContrato3->description_typeContract="Contrato para transporte de turistas";
        $tipoContrato3->contract_name="Empresa Turismo";
        $tipoContrato3->save();
        
        $tipoContrato4 = new contractType();
        $tipoContrato4->description_typeContract="Contrato para un grupo específico de usuarios (transporte de particulares)";
        $tipoContrato4->contract_name="Ocacionales";
        $tipoContrato4->save();
        
        $tipoContrato5 = new contractType();
        $tipoContrato5->description_typeContract="Contrato para Transporte de usuarios del servicio de salud";
        $tipoContrato5->contract_name="Usuarios de Servicios de Salud";
        $tipoContrato5->save();

        $tipoContrato6 = new contractType();
        $tipoContrato6->description_typeContract="Contrato para Padres";
        $tipoContrato6->contract_name="por cada papa";
        $tipoContrato6->save();

        $tipoContrato7 = new contractType();
        $tipoContrato7->description_typeContract="Anexo";
        $tipoContrato7->contract_name="Anexo";
        $tipoContrato7->save();

        $tipoContrato8 = new contractType();
        $tipoContrato8->description_typeContract="Contrato de Vinculación";
        $tipoContrato8->contract_name="Vinculación";
        $tipoContrato8->save();
    }
}

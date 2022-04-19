<?php

namespace Database\Seeders;

use App\Models\alertType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipoalerta1 = new alertType();
        $tipoalerta1->alert_type_description="info";
        $tipoalerta1->save();
        
        $tipoalerta2 = new alertType();
        $tipoalerta2->alert_type_description="succes";
        $tipoalerta2->save();
        
        $tipoalerta3 = new alertType();
        $tipoalerta3->alert_type_description="warning";
        $tipoalerta3->save();
        
        $tipoalerta4 = new alertType();
        $tipoalerta4->alert_type_description="danger";
        $tipoalerta4->save();
        
        $tipoalerta5 = new alertType();
        $tipoalerta5->alert_type_description="question";
        $tipoalerta5->save();
    }
}

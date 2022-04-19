<?php

namespace Database\Seeders;

use App\Models\work_area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $areaTrabajo1 = new work_area();
        $areaTrabajo1->workarea_description= "Area de Infraestructura y RH";
        $areaTrabajo1->save();

        $areaTrabajo2 = new work_area();
        $areaTrabajo2->workarea_description= "Area Compras y Suministros";
        $areaTrabajo2->save();

        $areaTrabajo3 = new work_area();
        $areaTrabajo3->workarea_description= "Area de Vinculación";
        $areaTrabajo3->save();

        $areaTrabajo4 = new work_area();
        $areaTrabajo4->workarea_description= "Area Operativa";
        $areaTrabajo4->save();

        $areaTrabajo5 = new work_area();
        $areaTrabajo5->workarea_description= "Area Locativa";
        $areaTrabajo5->save();

        $areaTrabajo6 = new work_area();
        $areaTrabajo6->workarea_description= "Area Administrativa";
        $areaTrabajo6->save();
    }
}

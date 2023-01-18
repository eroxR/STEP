<?php

namespace Database\Seeders;

use App\Models\workArea;
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
        $areaTrabajo1 = new workArea();
        $areaTrabajo1->workarea_description= "Area de Infraestructura y RH";
        $areaTrabajo1->save();

        $areaTrabajo2 = new workArea();
        $areaTrabajo2->workarea_description= "Area Compras y Suministros";
        $areaTrabajo2->save();

        $areaTrabajo3 = new workArea();
        $areaTrabajo3->workarea_description= "Area de Vinculación";
        $areaTrabajo3->save();

        $areaTrabajo4 = new workArea();
        $areaTrabajo4->workarea_description= "Area Operativa";
        $areaTrabajo4->save();

        $areaTrabajo5 = new workArea();
        $areaTrabajo5->workarea_description= "Area Locativa";
        $areaTrabajo5->save();

        $areaTrabajo6 = new workArea();
        $areaTrabajo6->workarea_description= "Area Administrativa";
        $areaTrabajo6->save();
    }
}

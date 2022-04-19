<?php

namespace Database\Seeders;

use App\Models\alertStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlertStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $estadoalerta1 = new alertStatus();
        $estadoalerta1->description_statealert="LEIDO";
        $estadoalerta1->save();
        
        $estadoalerta2 = new alertStatus();
        $estadoalerta2->description_statealert="NO LEIDO";
        $estadoalerta2->save();
    }
}

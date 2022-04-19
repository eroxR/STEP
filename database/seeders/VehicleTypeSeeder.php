<?php

namespace Database\Seeders;

use App\Models\vehicle_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipovehiculo1 = new vehicle_type();
        $tipovehiculo1->vehicle_type_name="Automóvil";
        $tipovehiculo1->save();

        $tipovehiculo2 = new vehicle_type();
        $tipovehiculo2->vehicle_type_name="Buggy";
        $tipovehiculo2->save();

        $tipovehiculo3 = new vehicle_type();
        $tipovehiculo3->vehicle_type_name="Bus";
        $tipovehiculo3->save();

        $tipovehiculo4 = new vehicle_type();
        $tipovehiculo4->vehicle_type_name="Buseta";
        $tipovehiculo4->save();

        $tipovehiculo5 = new vehicle_type();
        $tipovehiculo5->vehicle_type_name="Camión";
        $tipovehiculo5->save();

        $tipovehiculo6 = new vehicle_type();
        $tipovehiculo6->vehicle_type_name="Camioneta";
        $tipovehiculo6->save();

        $tipovehiculo7 = new vehicle_type();
        $tipovehiculo7->vehicle_type_name="Campero";
        $tipovehiculo7->save();

        $tipovehiculo8 = new vehicle_type();
        $tipovehiculo8->vehicle_type_name="Convertible";
        $tipovehiculo8->save();

        $tipovehiculo9 = new vehicle_type();
        $tipovehiculo9->vehicle_type_name="Coupe";
        $tipovehiculo9->save();

        $tipovehiculo10 = new vehicle_type();
        $tipovehiculo10->vehicle_type_name="Cuatrimoto";
        $tipovehiculo10->save();

        $tipovehiculo11 = new vehicle_type();
        $tipovehiculo11->vehicle_type_name="Hatchback";
        $tipovehiculo11->save();

        $tipovehiculo12 = new vehicle_type();
        $tipovehiculo12->vehicle_type_name="Limusina";
        $tipovehiculo12->save();

        $tipovehiculo13 = new vehicle_type();
        $tipovehiculo13->vehicle_type_name="Microbús";
        $tipovehiculo13->save();

        $tipovehiculo14 = new vehicle_type();
        $tipovehiculo14->vehicle_type_name="Motocarro";
        $tipovehiculo14->save();

        $tipovehiculo15 = new vehicle_type();
        $tipovehiculo15->vehicle_type_name="Motocicleta";
        $tipovehiculo15->save();

        $tipovehiculo16 = new vehicle_type();
        $tipovehiculo16->vehicle_type_name="Mototriciclo";
        $tipovehiculo16->save();

        $tipovehiculo17 = new vehicle_type();
        $tipovehiculo17->vehicle_type_name="Panel";
        $tipovehiculo17->save();

        $tipovehiculo18 = new vehicle_type();
        $tipovehiculo18->vehicle_type_name="Picó";
        $tipovehiculo18->save();

        $tipovehiculo19 = new vehicle_type();
        $tipovehiculo19->vehicle_type_name="Sedán";
        $tipovehiculo19->save();

        $tipovehiculo20 = new vehicle_type();
        $tipovehiculo20->vehicle_type_name="Tractocamión";
        $tipovehiculo20->save();

        $tipovehiculo21 = new vehicle_type();
        $tipovehiculo21->vehicle_type_name="Van";
        $tipovehiculo21->save();

        $tipovehiculo22 = new vehicle_type();
        $tipovehiculo22->vehicle_type_name="Volqueta";
        $tipovehiculo22->save();
    }
}

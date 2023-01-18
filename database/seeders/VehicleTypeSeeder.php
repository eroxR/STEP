<?php

namespace Database\Seeders;

use App\Models\vehicleType;
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
        $tipovehiculo1 = new vehicleType();
        $tipovehiculo1->vehicle_type_name="Automóvil";
        $tipovehiculo1->save();

        $tipovehiculo2 = new vehicleType();
        $tipovehiculo2->vehicle_type_name="Buggy";
        $tipovehiculo2->save();

        $tipovehiculo3 = new vehicleType();
        $tipovehiculo3->vehicle_type_name="Bus";
        $tipovehiculo3->save();

        $tipovehiculo4 = new vehicleType();
        $tipovehiculo4->vehicle_type_name="Buseta";
        $tipovehiculo4->save();

        $tipovehiculo5 = new vehicleType();
        $tipovehiculo5->vehicle_type_name="Camión";
        $tipovehiculo5->save();

        $tipovehiculo6 = new vehicleType();
        $tipovehiculo6->vehicle_type_name="Camioneta";
        $tipovehiculo6->save();

        $tipovehiculo7 = new vehicleType();
        $tipovehiculo7->vehicle_type_name="Campero";
        $tipovehiculo7->save();

        $tipovehiculo8 = new vehicleType();
        $tipovehiculo8->vehicle_type_name="Convertible";
        $tipovehiculo8->save();

        $tipovehiculo9 = new vehicleType();
        $tipovehiculo9->vehicle_type_name="Coupe";
        $tipovehiculo9->save();

        $tipovehiculo10 = new vehicleType();
        $tipovehiculo10->vehicle_type_name="Cuatrimoto";
        $tipovehiculo10->save();

        $tipovehiculo11 = new vehicleType();
        $tipovehiculo11->vehicle_type_name="Hatchback";
        $tipovehiculo11->save();

        $tipovehiculo12 = new vehicleType();
        $tipovehiculo12->vehicle_type_name="Limusina";
        $tipovehiculo12->save();

        $tipovehiculo13 = new vehicleType();
        $tipovehiculo13->vehicle_type_name="Microbús";
        $tipovehiculo13->save();

        $tipovehiculo14 = new vehicleType();
        $tipovehiculo14->vehicle_type_name="Motocarro";
        $tipovehiculo14->save();

        $tipovehiculo15 = new vehicleType();
        $tipovehiculo15->vehicle_type_name="Motocicleta";
        $tipovehiculo15->save();

        $tipovehiculo16 = new vehicleType();
        $tipovehiculo16->vehicle_type_name="Mototriciclo";
        $tipovehiculo16->save();

        $tipovehiculo17 = new vehicleType();
        $tipovehiculo17->vehicle_type_name="Panel";
        $tipovehiculo17->save();

        $tipovehiculo18 = new vehicleType();
        $tipovehiculo18->vehicle_type_name="Picó";
        $tipovehiculo18->save();

        $tipovehiculo19 = new vehicleType();
        $tipovehiculo19->vehicle_type_name="Sedán";
        $tipovehiculo19->save();

        $tipovehiculo20 = new vehicleType();
        $tipovehiculo20->vehicle_type_name="Tractocamión";
        $tipovehiculo20->save();

        $tipovehiculo21 = new vehicleType();
        $tipovehiculo21->vehicle_type_name="Van";
        $tipovehiculo21->save();

        $tipovehiculo22 = new vehicleType();
        $tipovehiculo22->vehicle_type_name="Volqueta";
        $tipovehiculo22->save();
    }
}

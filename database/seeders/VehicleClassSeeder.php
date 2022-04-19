<?php

namespace Database\Seeders;

use App\Models\vehicle_class;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $claseVehiculo1 = new vehicle_class();
        $claseVehiculo1->vehicle_class_description="Gasolina";
        $claseVehiculo1->save();
        
        $claseVehiculo2 = new vehicle_class();
        $claseVehiculo2->vehicle_class_description="Diesel";
        $claseVehiculo2->save();
        
        $claseVehiculo3 = new vehicle_class();
        $claseVehiculo3->vehicle_class_description="Gas Natural Vehicular (GNV)";
        $claseVehiculo3->save();
        
        $claseVehiculo4 = new vehicle_class();
        $claseVehiculo4->vehicle_class_description="Gasolina-Gas";
        $claseVehiculo4->save();
        
        $claseVehiculo5 = new vehicle_class();
        $claseVehiculo5->vehicle_class_description="Eléctrico";
        $claseVehiculo5->save();
        
        $claseVehiculo6 = new vehicle_class();
        $claseVehiculo6->vehicle_class_description="Hidrógeno";
        $claseVehiculo6->save();
        
        $claseVehiculo7 = new vehicle_class();
        $claseVehiculo7->vehicle_class_description="Etanol";
        $claseVehiculo7->save();
        
        $claseVehiculo8 = new vehicle_class();
        $claseVehiculo8->vehicle_class_description="Biodiesel";
        $claseVehiculo8->save();
    }
}

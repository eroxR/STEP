<?php

namespace Database\Seeders;

use App\Models\vehicleClass;
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
        $claseVehiculo1 = new vehicleClass();
        $claseVehiculo1->vehicle_class_description="Gasolina";
        $claseVehiculo1->save();
        
        $claseVehiculo2 = new vehicleClass();
        $claseVehiculo2->vehicle_class_description="Diesel";
        $claseVehiculo2->save();
        
        $claseVehiculo3 = new vehicleClass();
        $claseVehiculo3->vehicle_class_description="Gas Natural Vehicular (GNV)";
        $claseVehiculo3->save();
        
        $claseVehiculo4 = new vehicleClass();
        $claseVehiculo4->vehicle_class_description="Gasolina-Gas";
        $claseVehiculo4->save();
        
        $claseVehiculo5 = new vehicleClass();
        $claseVehiculo5->vehicle_class_description="Eléctrico";
        $claseVehiculo5->save();
        
        $claseVehiculo6 = new vehicleClass();
        $claseVehiculo6->vehicle_class_description="Hidrógeno";
        $claseVehiculo6->save();
        
        $claseVehiculo7 = new vehicleClass();
        $claseVehiculo7->vehicle_class_description="Etanol";
        $claseVehiculo7->save();
        
        $claseVehiculo8 = new vehicleClass();
        $claseVehiculo8->vehicle_class_description="Biodiesel";
        $claseVehiculo8->save();
    }
}

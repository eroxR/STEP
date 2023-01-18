<?php

namespace Database\Factories;

use App\Models\brakeTypes;
use App\Models\dimensionRims;
use App\Models\driver;
use App\Models\User;
use App\Models\vehicleClass;
use App\Models\vehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'plate_vehicle' => $this->faker->bothify('???###'),
            'brand_vehicle' => $this->faker->company(),
            'model_vehicle' => $this->faker->year($max = 'now'),
            'vehicle_chassis_number' => $this->faker->numerify('##########'),
            'property_card_number' => $this->faker->numerify('#############3'),
            'cylinder_vehicle' => $this->faker->randomDigitNot(3) ,
            'vehicle_type' => vehicleType::all()->random(),
            'side_vehicle' => $this->faker->numerify('###'),
            'owner_vehicle' => User::all()->random()->id,
            'driver_id' => driver::all()->random()->id,
            'number_passenger' => $this->faker->randomDigit(),
            'secure_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'number_accreditation_soat' => $this->faker->numerify('#############'),
            'technomechanical_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'number_technomechanical_accreditation' => $this->faker->numerify('##############'),
            'certificate_extracontractual' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'civil_contractual' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'internal_external_owner_type'=> $this->faker->randomElement(['0', '1']),//['EXTERNO','INTERNO']
            'infrastructure_vehicle' => vehicleClass::all()->random(),
            'state_vehicle'=> $this->faker->randomElement(['0', '1','2','3']),//['Inhabilitado','Habilitado','Inactivo','Pendiente']
            // 'card_operation' => $this->faker->numerify('##########'),
            'expiration_card_operation' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            /* $table->date('preventive')->nullable();//numero_preventiva */
            'expiration_preventive' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'admission_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'vehicle_pickup_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'engine_number' => $this->faker->numerify('##########'),
            'use_vehicle' => $this->faker->sentence(2),
            'color_vehicle' => $this->faker->safeColorName(),
            'quantity_valves' => $this->faker->randomDigit(),
            'number_cylinders' => $this->faker->randomDigit(),
            'turbo' => $this->faker->randomDigit(),
            'orientation' => $this->faker->randomDigit(),
            'type_direction' => $this->faker->randomDigit(),
            'transmission_type' => $this->faker->randomDigit(),
            'number_speeds' => $this->faker->randomDigit(),
            'tire_number' => $this->faker->randomDigit(),
            'type_bearing' => $this->faker->randomDigit(),
            'front_suspension' => $this->faker->randomDigit(),
            'rear_suspension' => $this->faker->randomDigit(),
            'dimension_rims' => dimensionRims::all()->random(),
            'material_rims' => $this->faker->sentence(),
            'rear_brake_type' => brakeTypes::all()->random(),
            'front_brake_type' => brakeTypes::all()->random(),
            // 'body_serial_number' => $this->faker->randomDigit(),
            'number_windows' => $this->faker->randomDigit(),
        ];
    }
}

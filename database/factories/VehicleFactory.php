<?php

namespace Database\Factories;

use App\Models\driver;
use App\Models\User;
use App\Models\vehicle_class;
use App\Models\vehicle_type;
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
            'cylinder_vehicle' => $this->faker->numerify('####'),
            'vehicle_type' => vehicle_type::all()->random(),
            'side_vehicle' => $this->faker->numerify('##########'),
            'owner_vehicle' => User::all()->random()->id,
            'driver' => driver::all()->random()->id,
            'number_passenger' => $this->faker->randomDigit(),
            'secure_start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'secure_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'number_accreditation_soat' => $this->faker->numerify('##########'),
            'date_start technomechanics' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'technomechanical_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'number_technomechanical_accreditation' => $this->faker->numerify('##########'),
            'tax_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fuel' => $this->faker->sentence(1),
            'internal_external_owner_type'=> $this->faker->randomElement(['EXTERNO', 'INTERNO']),
            'infrastructure_vehicle' => vehicle_class::all()->random(),
            'state_vehicle'=> $this->faker->randomElement(['ACTIVO', 'INACTIVO']),
            'card_operation' => $this->faker->numerify('##########'),
            'expiration_card_operation' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'expiration_preventive' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gas_expiration' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'admission_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
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
            'dimension_rims' => $this->faker->randomDigit(2),
            'material_rims' => $this->faker->sentence(),
            'rear_brake_type' => $this->faker->randomDigit(),
            'front_brake_type' => $this->faker->randomDigit(),
            'body_serial_number' => $this->faker->randomDigit(),
            'number_windows' => $this->faker->randomDigit(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\licenseCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\driver>
 */
class DriverFactory extends Factory
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
            'user_id' => User::all()->where('charge', 5)->unique()->random()->id,
            'license_number' => $this->faker->numerify('##########'),
            'license_category' => licenseCategory::all()->random()->id,
            'license_expiration' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'certificate_drugs_alchoolemia' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'SIMIT_queries' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'driving_exam' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Norm_Overland_Transportation_Automotive' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Rules_Transit' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Normative_Tips' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Driving_Methods' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Defensive_driving' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'distractions' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'First_aid' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'First_Responder' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'five_senses_driving' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Active_Passive_Security_vehicle' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Road_safety' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'driver_status' => $this->faker->randomElement(['0', '1']),//['Inhabilitado','Habilitado']
            'Linked' => User::all()->random()->id,
        ];
    }
}

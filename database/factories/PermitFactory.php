<?php

namespace Database\Factories;

use App\Models\contract;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\permit>
 */
class PermitFactory extends Factory
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
            'contract' => contract::all()->random()->id,
            'permit_start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'permit_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'permit_number' => $this->faker->randomDigitNot(0),
        ];
    }
}

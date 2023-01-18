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
            'fuec_state' => $this->faker->randomElement(['0','1','2','3','4']), //['INICIAL','EN CURSO','PENDIENTE','FINALIZADO','CANCELADO'])->default('INICIAL');
            'permit_number' => $this->faker->randomDigitNot(0),
            'permit_code' => $this->faker->numerify('#####################'),

        ];
    }
}

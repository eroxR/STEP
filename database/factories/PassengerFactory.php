<?php

namespace Database\Factories;

use App\Models\contract;
use App\Models\identification;
use App\Models\permit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\passenger>
 */
class PassengerFactory extends Factory
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
            'identification' => identification::all()->random()->id,
			'identificationcard_passenger' => $this->faker->unique()->randomNumber,
			'names_lastnames'  => $this->faker->firstName('male'|'female'),
			'permit_id' => permit::all()->random()->id,
			'contract_id' => contract::all()->random()->id,
        ];
    }
}

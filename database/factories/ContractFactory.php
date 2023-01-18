<?php

namespace Database\Factories;

use App\Models\contractType;
use App\Models\identification;
use App\Models\paymentType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contract>
 */
class ContractFactory extends Factory
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
            'contract_number' => $this->faker->unique()->numberBetween($min = 1, $max = 100),
			'type_contract' => contractType::all()->random()->id,
			'route_trip_contract' => $this->faker->text(100),
			'date_start_contract' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'contract_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'contract_value' => $this->faker->randomFloat(2,  $min = 1, $max = 10000000000),
			'contracting_name' => $this->faker->name('male'|'female'),
			'state_contract' => $this->faker->randomElement(['0','1','2','3','4']), //['INICIAL','CANCELADO','EN CURSO','FINALIZADO','PENDIENTE'])->default('INICIAL');
			'identification' => identification::all()->random()->id,
			'contract_document' => $this->faker->randomNumber,
			'expedition_identificationcard' => $this->faker->text(100),
			'contracting_phone' => $this->faker->e164PhoneNumber(),
			'contracting_direction' => $this->faker->address(),
			'legal_representative' => $this->faker->name('male'|'female'),
			'legal_representative_expedition_identificationcard' => $this->faker->text(100),
			'passenger_quantity' => $this->faker->randomDigit(),
			'total_disposition' => $this->faker->randomElement(['SI', 'NO']),
			'quantity_vehicle' => $this->faker->randomDigit(),
			// 'cooperation_contract'
			// 'entity_name'
			// 'secure_policy'
			'tipe_pay' => paymentType::all()->random()->id,
			'contract_signing_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			// 'school_name'
			// 'address_school'
			'identification_represent_legal' => identification::all()->random()->id,
			'identificationcard_represent_legal' => $this->faker->randomNumber,
			'trip_from' => $this->faker->citySuffix (),
			'trip_to' => $this->faker->citySuffix (),
			'place_of_origin' => $this->faker->citySuffix (),
			'destination_place' => $this->faker->citySuffix (),
			'return_place' => $this->faker->citySuffix (),
			'identificationcard_representative_group' => $this->faker->randomNumber,
			'group_representative_name' => $this->faker->name('male'|'female'),
			'dateofexpedition_representative_group' => $this->faker->text(100),
			'signed_contract' => $this->faker->randomElement(['0', '1']),//['Sin firmar','Firmado']
        ];
    }
}

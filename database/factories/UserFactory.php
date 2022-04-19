<?php

namespace Database\Factories;

use App\Models\arl;
use App\Models\binding;
use App\Models\blood_type;
use App\Models\charges;
use App\Models\city;
use App\Models\compensation_box;
use App\Models\country;
use App\Models\educational_level;
use App\Models\eps;
use App\Models\identification;
use App\Models\layoffs;
use App\Models\marital_status;
use App\Models\pension;
use App\Models\provinces;
use App\Models\relationship;
use App\Models\Team;
use App\Models\User;
use App\Models\work_area;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identification' => identification::all()->random()->id,
            'identificationcard' => $this->faker->unique()->randomNumber,
            'firstname'  => $this->faker->firstName('male'|'female'), 
            'secondname' => $this->faker->firstName(), 
            'lastname' => $this->faker->lastName(), 
            'motherslastname' => $this->faker->lastName(), 
            'birthdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'age' => $this->faker->numberBetween($min = 18, $max = 75),
            'type_sex' => $this->faker->randomElement(['F', 'M']),
			'country' => country::all()->random()->id,
			'Department' => provinces::all()->random()->id,
			'city' => city::all()->random()->id,
            'address' => $this->faker->address(), 
            'phone' => $this->faker->tollFreePhoneNumber(),
            'phone_cellular' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->unique()->freeEmail(),
            'nit' => $this->faker->unique()->numerify('##########-#'), 
			'eps' => eps::all()->random()->id,
            'eps_status' => $this->faker->randomElement(['ACTIVO', 'INACTIVO']),
            'date_eps' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'blood_type' => blood_type::all()->random()->id,
			'pension' => pension::all()->random()->id,
            'pension_status' => $this->faker->randomElement(['ACTIVO', 'INACTIVO']),
            'date_pension' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'layoffs' => layoffs::all()->random()->id,
            'status_layoffs' => $this->faker->randomElement(['ACTIVO', 'INACTIVO']), 
            'date_layoffs' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'arl' => arl::all()->random()->id,
            'arl-status' => $this->faker->randomElement(['ACTIVO', 'INACTIVO']), 
            'arl_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'compensationbox' => compensation_box::all()->random()->id,
            'compensationbox_status' => $this->faker->randomElement(['ACTIVO', 'INACTIVO']), 
            'date_compensationbox' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'user_state' => $this->faker->randomElement(['ACTIVO', 'INACTIVO']), 
            'user_entry_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'date_withdrawal_user' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'charge' => charges::all()->random()->id,
            'usertype' => $this->faker->numberBetween(1,4),
			'civil_status' => marital_status::all()->random()->id,
			'family_document_type' => identification::all()->random()->id,
            'family_names' => $this->faker->firstName('male'|'female'),
			'relationship' => relationship::all()->random()->id,
            'family_address' => $this->faker->address(), 
            'family_phone' => $this->faker->tollFreePhoneNumber(),
            'family_phone_cellular' => $this->faker->e164PhoneNumber(),
			'city_birth' => city::all()->random()->id,
			'place_expedition_identificationcard' => city::all()->random()->id,
            'identificationcard_expedition_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'binding_type' => binding::all()->random()->id,
            'weight' => $this->faker->randomFloat(2,  $min = 1, $max = 3),
            'pant_size' => $this->faker->randomFloat(2,  $min = 1, $max = 3), 
            'shirt_size' => $this->faker->randomFloat(2,  $min = 1, $max = 3), 
            'shoe_size' => $this->faker->randomFloat(2,  $min = 1, $max = 3), 
			'education_level' => educational_level::all()->random()->id,
            'educational_institution' => $this->faker->company(), 
            'last_year' => $this->faker->year($max = 'now'),
            'study_end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'obtained_title' => $this->faker->sentence(2),
            'last_company_name' => $this->faker->company(), 
            'charges_last_company' => $this->faker->sentence(6), 
            'start_date_last_company' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'date_end_last_company' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'functions_performed' => $this->faker->text(200),

            // 'supplier_name' => , 
            // 'company_name_provider' => , 
            // 'commercial_reason_supplier' => , 
            // 'supplier_web_page' => ,
            // 'supplier_category' => ,
            // 'economic_activity' => ,
            // 'products_and_services' => ,
            // 'supplier_description' => ,

            'salary' => $this->faker->randomFloat(2, $min = 1, $max = 100000), 
            'aid_transport' => $this->faker->randomFloat(2, $min = 1, $max = 100000), 
			'work_area' => work_area::all()->random()->id,
			'username' => $this->faker->unique()->firstName('male'|'female'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),

            // 'current_team_id' => ,
            // 'profile_photo_path' => , 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}

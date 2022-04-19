<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'identificationcard' => '1088286',
            'firstname' => 'Eiro',
            'lastname' => 'Renteria',
            'email' => 'erox.bitcoin@gmail.com',
            'username' => 'erox',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(99)->create();

    }
}

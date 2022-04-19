<?php

namespace Database\Seeders;

use App\Models\contract;
use App\Models\driver;
use App\Models\permit;
use App\Models\vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(AlertStatusSeeder::class);
        $this->call(AlertTypeSeeder::class);
        $this->call(ArlSeeder::class);
        $this->call(BindingSeeder::class);
        $this->call(BloodTypeSeeder::class);
        $this->call(ChargesSeeder::class);
        $this->call(CompensationBoxSeeder::class);
        $this->call(ContractTypeSeeder::class);
        $this->call(EconomicActivitySeeder::class);
        $this->call(EducationalLevelSeeder::class);
        $this->call(EpsSeeder::class);
        $this->call(IdentificationSeeder::class);
        $this->call(LayoffsSeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(PensionSeeder::class);
        $this->call(ProductsServicesSeeder::class);
        $this->call(RelationshipSeeder::class);
        $this->call(SupplierCategorySeeder::class);
        $this->call(UsertypeSeeder::class);
        $this->call(VehicleClassSeeder::class);
        $this->call(VehicleTypeSeeder::class);
        $this->call(WorkAreaSeeder::class);
        $this->call(PaymentTypeSeeder::class);
        $this->call(countrySeeder::class);
        $this->call(ProvincesSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(UserSeeder::class);

         driver::factory(75)->create();
         vehicle::factory(45)->create();
         contract::factory(70)->create();
         permit::factory(135)->create();
    }
}

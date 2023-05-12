<?php

namespace Database\Seeders;

use App\Models\contract;
use App\Models\driver;
use App\Models\passenger;
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


        $this->call(CountrySeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ArlSeeder::class);
        $this->call(BloodTypeSeeder::class);
        $this->call(BondingSeeder::class);
        $this->call(ChargeSeeder::class);
        $this->call(CompensationBoxSeeder::class);
        $this->call(EconomicActivitySeeder::class);
        $this->call(EducationalLevelSeeder::class);
        $this->call(EpsSeeder::class);
        $this->call(IdentificationSeeder::class);
        $this->call(LayoffsSeeder::class);
        $this->call(LicenseCategorySeeder::class);
        $this->call(MaritalStatusSeeder::class);
        $this->call(PensionSeeder::class);
        $this->call(ProductsAndServicesSeeder::class);

        $this->call(RelationshipSeeder::class);
        $this->call(SupplierCategorySeeder::class);
        $this->call(UsertypeSeeder::class);
        $this->call(WorkAreaSeeder::class);
        
        $this->call(BrakeTypesSeeder::class);
        $this->call(DimensionRimsSeeder::class);
        $this->call(VehicleClassSeeder::class);
        $this->call(VehicleTypeSeeder::class);
        
        $this->call(ContractTypeSeeder::class);
        $this->call(PaymentTypeSeeder::class);

        $this->call(AlertStatusSeeder::class);
        $this->call(AlertTypeSeeder::class);
        
        $this->call(UserSeeder::class);
        
         driver::factory(85)->create();
         vehicle::factory(65)->create();
         contract::factory(100)->create();
         permit::factory(170)->create();
         passenger::factory(200)->create();
    }
}

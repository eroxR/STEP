<?php

namespace Database\Seeders;

use App\Models\payment_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tipoPago1 = new payment_type();
        $tipoPago1->description_typePayment="Contado";
        $tipoPago1->save();
        
        $tipoPago2 = new payment_type();
        $tipoPago2->description_typePayment="50% y 50%";
        $tipoPago2->save();
        
        $tipoPago3 = new payment_type();
        $tipoPago3->description_typePayment="Otro";
        $tipoPago3->save();
    }
}

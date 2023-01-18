<?php

namespace Database\Seeders;

use App\Models\paymentType;
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

        $tipoPago1 = new paymentType();
        $tipoPago1->description_typePayment="De Contado";
        $tipoPago1->save();
        
        $tipoPago2 = new paymentType();
        $tipoPago2->description_typePayment="el 50% a la firma del 
        contrato y el resto al inicio del servicio";
        $tipoPago2->save();
        
        $tipoPago3 = new paymentType();
        $tipoPago3->description_typePayment="Otro";
        $tipoPago3->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\productsAndServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsAndServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $productoyservicio1 = new productsAndServices();
        $productoyservicio1->ProductandService_description= "Asesorias Juridicas";
        $productoyservicio1->save();

        $productoyservicio2 = new productsAndServices();
        $productoyservicio2->ProductandService_description= "Asesorias SGSST";
        $productoyservicio2->save();

        $productoyservicio3 = new productsAndServices();
        $productoyservicio3->ProductandService_description= "Asesorias Técnicas";
        $productoyservicio3->save();

        $productoyservicio4 = new productsAndServices();
        $productoyservicio4->ProductandService_description= "Combustible";
        $productoyservicio4->save();

        $productoyservicio5 = new productsAndServices();
        $productoyservicio5->ProductandService_description= "Contabilidad";
        $productoyservicio5->save();

        $productoyservicio6 = new productsAndServices();
        $productoyservicio6->ProductandService_description= "Convenios Empresariales";
        $productoyservicio6->save();

        $productoyservicio7 = new productsAndServices();
        $productoyservicio7->ProductandService_description= "Examenes Medicos de Ingresos y Retiros";
        $productoyservicio7->save();

        $productoyservicio8 = new productsAndServices();
        $productoyservicio8->ProductandService_description= "Repuestos";
        $productoyservicio8->save();

        $productoyservicio9 = new productsAndServices();
        $productoyservicio9->ProductandService_description= "Revisiones Tecnomecanicas";
        $productoyservicio9->save();

        $productoyservicio10 = new productsAndServices();
        $productoyservicio10->ProductandService_description= "Revisorias Fiscales";
        $productoyservicio10->save();

        $productoyservicio11 = new productsAndServices();
        $productoyservicio11->ProductandService_description= "Software y Comunicaciones ";
        $productoyservicio11->save();
    }
}

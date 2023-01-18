<?php

namespace Database\Seeders;

use App\Models\usertype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipousuario1 = new usertype();
		$tipousuario1->description_usertype = "Cliente";
		$tipousuario1->save();

		$tipousuario2 = new usertype();
		$tipousuario2->description_usertype = "Empleado";
		$tipousuario2->save();

		$tipousuario3 = new usertype();
		$tipousuario3->description_usertype = "Proveedor";
		$tipousuario3->save();

		$tipousuario4 = new usertype();
		$tipousuario4->description_usertype = "Vinculado";
		$tipousuario4->save();

		$tipousuario5 = new usertype();
		$tipousuario5->description_usertype="Administrador";
		$tipousuario5->save();

        //$tipousuario5 = new usertype();
		//$tipousuario5->description_usertype="Aspirante";
		//$tipousuario5->save();
    }
}

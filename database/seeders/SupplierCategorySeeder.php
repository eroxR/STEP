<?php

namespace Database\Seeders;

use App\Models\supplier_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoriaProvedor1 = new supplier_category();
        $categoriaProvedor1->description_CategorySupplier="INSUMOS";
        $categoriaProvedor1->save();

        $categoriaProvedor2 = new supplier_category();
        $categoriaProvedor2->description_CategorySupplier="MANTENIMIENTOS";
        $categoriaProvedor2->save();

        $categoriaProvedor3 = new supplier_category();
        $categoriaProvedor3->description_CategorySupplier="SERVICIOS";
        $categoriaProvedor3->save();

        $categoriaProvedor4 = new supplier_category();
        $categoriaProvedor4->description_CategorySupplier="TRANSPORTES";
        $categoriaProvedor4->save();
    }
}

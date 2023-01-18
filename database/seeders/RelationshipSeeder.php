<?php

namespace Database\Seeders;

use App\Models\relationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $parentezco1 = new relationship();
        $parentezco1->description_relationship="Abuelo(a)";
        $parentezco1->save();

        $parentezco2 = new relationship();
        $parentezco2->description_relationship="Abuelo(a) del cónyuge";
        $parentezco2->save();

        $parentezco3 = new relationship();
        $parentezco3->description_relationship="Bisabuelo(a)";
        $parentezco3->save();

        $parentezco4 = new relationship();
        $parentezco4->description_relationship="Bisabuelo(a) del cónyuge";
        $parentezco4->save();

        $parentezco5 = new relationship();
        $parentezco5->description_relationship="Bisnieto(a)";
        $parentezco5->save();

        $parentezco6 = new relationship();
        $parentezco6->description_relationship="Cuñado(a)";
        $parentezco6->save();

        $parentezco7 = new relationship();
        $parentezco7->description_relationship="Hermano(a)";
        $parentezco7->save();

        $parentezco8 = new relationship();
        $parentezco8->description_relationship="Hijo(a)";
        $parentezco8->save();

        $parentezco9 = new relationship();
        $parentezco9->description_relationship="Madre";
        $parentezco9->save();

        $parentezco10 = new relationship();
        $parentezco10->description_relationship="Nieto(a)";
        $parentezco10->save();

        $parentezco11 = new relationship();
        $parentezco11->description_relationship="Nuera";
        $parentezco11->save();

        $parentezco12 = new relationship();
        $parentezco12->description_relationship="Padre";
        $parentezco12->save();

        $parentezco13 = new relationship();
        $parentezco13->description_relationship="Primo(a)";
        $parentezco13->save();

        $parentezco14 = new relationship();
        $parentezco14->description_relationship="Primo(a) del cónyuge";
        $parentezco14->save();

        $parentezco15 = new relationship();
        $parentezco15->description_relationship="Sobrino(a)";
        $parentezco15->save();

        $parentezco16 = new relationship();
        $parentezco16->description_relationship="Sobrino(a) del cónyuge";
        $parentezco16->save();

        $parentezco17 = new relationship();
        $parentezco17->description_relationship="Suegro(a)";
        $parentezco17->save();

        $parentezco18 = new relationship();
        $parentezco18->description_relationship="Tatarabuelo(a)";
        $parentezco18->save();

        $parentezco19 = new relationship();
        $parentezco19->description_relationship="Tatarabuelo(a) del cónyuge";
        $parentezco19->save();

        $parentezco20 = new relationship();
        $parentezco20->description_relationship="Tataranieto(a)";
        $parentezco20->save();

        $parentezco21 = new relationship();
        $parentezco21->description_relationship="Tío(a)";
        $parentezco21->save();

        $parentezco22 = new relationship();
        $parentezco22->description_relationship="Tío(a) del cónyuge";
        $parentezco22->save();

        $parentezco23 = new relationship();
        $parentezco23->description_relationship="Yerno";
        $parentezco23->save();
    }
}

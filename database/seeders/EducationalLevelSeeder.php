<?php

namespace Database\Seeders;

use App\Models\educationalLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nivelEducativo1 = new educationalLevel();
        $nivelEducativo1->description_levelEducation="Carrera Profesional";
        $nivelEducativo1->save();
        
        $nivelEducativo2 = new educationalLevel();
        $nivelEducativo2->description_levelEducation="Carrera Profesional sin Terminar";
        $nivelEducativo2->save();
        
        $nivelEducativo3 = new educationalLevel();
        $nivelEducativo3->description_levelEducation="Doctorado";
        $nivelEducativo3->save();
        
        $nivelEducativo4 = new educationalLevel();
        $nivelEducativo4->description_levelEducation="Doctorado sin Terminar";
        $nivelEducativo4->save();
        
        $nivelEducativo5 = new educationalLevel();
        $nivelEducativo5->description_levelEducation="Ninguno";
        $nivelEducativo5->save();
        
        $nivelEducativo6 = new educationalLevel(); 
        $nivelEducativo6->description_levelEducation="Postgrado";
        $nivelEducativo6->save();
        
        $nivelEducativo7 = new educationalLevel();
        $nivelEducativo7->description_levelEducation="Postgrado sin Terminar";
        $nivelEducativo7->save();
        
        $nivelEducativo8 = new educationalLevel();
        $nivelEducativo8->description_levelEducation="Primaria";
        $nivelEducativo8->save();
        
        $nivelEducativo9 = new educationalLevel();       
        $nivelEducativo9->description_levelEducation="Primaria Incompleta";
        $nivelEducativo9->save();
        
        $nivelEducativo10 = new educationalLevel();
        $nivelEducativo10->description_levelEducation="Segundaria";
        $nivelEducativo10->save();
        
        $nivelEducativo11 = new educationalLevel();
        $nivelEducativo11->description_levelEducation="Segundaria Incompleta";
        $nivelEducativo11->save();
        
        $nivelEducativo12 = new educationalLevel();
        $nivelEducativo12->description_levelEducation="Tecnico";
        $nivelEducativo12->save();
        
        $nivelEducativo13 = new educationalLevel();
        $nivelEducativo13->description_levelEducation="Tecnico sin Terminar";
        $nivelEducativo13->save();
        
        $nivelEducativo14 = new educationalLevel();
        $nivelEducativo14->description_levelEducation="Tecnologo";
        $nivelEducativo14->save();
        
        $nivelEducativo15 = new educationalLevel();
        $nivelEducativo15->description_levelEducation="Tecnologo sin Terminar";
        $nivelEducativo15->save();
    }
}

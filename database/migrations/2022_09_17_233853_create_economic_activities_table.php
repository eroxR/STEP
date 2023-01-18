<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_activities', function (Blueprint $table) {
            $table->id();//idActividadEconomica
            $table->integer('EconomicActivity_number');//codigo ActividadEconomica
			$table->string('description_EconomicActivity');//descripcion_ActividadEconomica
			
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('economic_activities');
    }
};

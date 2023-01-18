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
        Schema::create('accidents', function (Blueprint $table) {
            $table->id();//id_accidente
			$table->string('accident_place', 150);//lugar_accidente
			$table->time('time_accident');//hora_accidente
			$table->date('date_accident');//fecha_accidente
			$table->text('accident_description');//descripcion_accidente
			$table->bigInteger('comparing_number');//num_comparendo
			
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
        Schema::dropIfExists('accidents');
    }
};

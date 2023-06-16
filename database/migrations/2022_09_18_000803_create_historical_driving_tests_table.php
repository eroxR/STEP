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
        Schema::create('historical_driving_tests', function (Blueprint $table) {
            $table->id();//id_historicos_examen_conduccion
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('Driving_Test_certification');//certificado_examen_conduccion
			
			$table->timestamps();
			
			$table->foreign('driver_id')->references('id')->on('drivers')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_driving_tests');
    }
};

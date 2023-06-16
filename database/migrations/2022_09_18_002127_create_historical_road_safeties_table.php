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
        Schema::create('historical_road_safeties', function (Blueprint $table) {
            $table->id();//id_historicos_seguridad_vial
            $table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('Road_safety_certification');//certificado_seguridad_vial
			
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
        Schema::dropIfExists('historical_road_safeties');
    }
};

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
        Schema::create('historical_land_transport_standards', function (Blueprint $table) {
            $table->id();//id_historicos_norma_transporte_terrestre
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('Land_Transport_Standards_certification');//certificado_norma_transporte_terrestre
			
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
        Schema::dropIfExists('historical_land_transport_standards');
    }
};

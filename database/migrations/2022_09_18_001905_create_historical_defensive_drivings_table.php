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
        Schema::create('historical_defensive_drivings', function (Blueprint $table) {
            $table->id();//id_historicos_manejo_defensivo
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('Defensive_driving_certification');//certificado_manejo_defensivo
			
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
        Schema::dropIfExists('historical_defensive_drivings');
    }
};

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
        Schema::create('driver_accident_vehicle', function (Blueprint $table) {
            $table->id();//idaccidente_conductor_vehiculo
			$table->unsignedBigInteger('accident_id');//accidente
			$table->unsignedBigInteger('driver_id');//conductor
            $table->unsignedBigInteger('vehicle_id');//vehiculo
			
			$table->timestamps();
			
			$table->foreign('driver_id')->references('id')->on('users')->onUpdate('cascade');
			$table->foreign('accident_id')->references('id')->on('accidents')->onUpdate('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_accident_vehicle');
    }
};

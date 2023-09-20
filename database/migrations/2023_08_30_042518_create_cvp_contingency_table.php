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
        Schema::create('cvp_contingency', function (Blueprint $table) {
            $table->id();//idcontrato_vehiculo_permiso
			$table->unsignedBigInteger('contract_id')->nullable();//contrato
			$table->unsignedBigInteger('vehicle_id');//vehiculo
            $table->unsignedBigInteger('permit_id')->nullable();//permiso
			
			$table->timestamps();
			
			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onUpdate('cascade');
			$table->foreign('contract_id')->references('id')->on('contracts')->onUpdate('cascade');
            $table->foreign('permit_id')->references('id')->on('permit_contingencies')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvp_contingency');
    }
};

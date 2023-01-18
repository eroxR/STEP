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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();//id_pasajero
			$table->unsignedBigInteger('identification')->nullable();//identificacion
			$table->bigInteger('identificationcard_passenger');//cedula_pasajero
			$table->string('names_lastnames');//nombres_apellidos
			$table->unsignedBigInteger('permit_id')->nullable();//permiso
			$table->unsignedBigInteger('contract_id')->nullable();//contrato
			
			$table->timestamps();
			
			$table->foreign('permit_id')->references('id')->on('permits')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('contract_id')->references('id')->on('contracts')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('identification')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
};

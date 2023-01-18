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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();//id_ciudad
			$table->string('city_name');//nombre_ciudad
			$table->unsignedBigInteger('associate_department');//departamento_asociado
			$table->unsignedBigInteger('partner_country')->nullable();//pais_asociado
			
			$table->timestamps();
			
			$table->foreign('partner_country')->references('id')->on('countries')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('associate_department')->references('id')->on('provinces')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
};

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
        Schema::create('historical_licenses', function (Blueprint $table) {
            $table->id();//id_historicos_licencia
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->bigInteger('license_number');//numero_licencia
			$table->unsignedBigInteger('license_category');//categoria_licencia
			$table->date('license_expiration');//espiracion_licencia
			
			$table->timestamps();
			
			$table->foreign('driver_id')->references('id')->on('drivers')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('license_category')->references('id')->on('license_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_licenses');
    }
};

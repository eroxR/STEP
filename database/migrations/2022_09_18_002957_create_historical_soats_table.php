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
        Schema::create('historical_soats', function (Blueprint $table) {
            $table->id();//id_historico_SOAT
			$table->unsignedBigInteger('vehicle_id')->nullable();//vehiculo
			$table->date('secure_end_date');//fecha_vencimiento_SOAT
			$table->bigInteger('number_accreditation_soat');//numero_acreditación_SOAT
			
			$table->timestamps();
			
			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_soats');
    }
};

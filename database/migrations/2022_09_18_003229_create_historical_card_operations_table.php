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
        Schema::create('historical_card_operations', function (Blueprint $table) {
            $table->id();//id_historicos_tarjeta_operación
			$table->unsignedBigInteger('vehicle_id')->nullable();//vehiculo
			$table->bigInteger('card_operation');//numero_tarjeta_operación
			$table->date('expiration_card_operation');//fecha_expiración_tarjeta_operación
			
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
        Schema::dropIfExists('historical_card_operations');
    }
};

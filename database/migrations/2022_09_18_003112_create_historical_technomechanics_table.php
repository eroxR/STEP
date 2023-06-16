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
        Schema::create('historical_technomechanics', function (Blueprint $table) {
            $table->id();//id_historico_tecnomecanica
			$table->unsignedBigInteger('vehicle_id')->nullable();//vehiculo
			$table->date('technomechanical_completion_date');//fecha_finalización_tecnomecanica
			$table->bigInteger('technomechanical_accreditation_number');//numero_acreditación_tecnomecanica
			
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
        Schema::dropIfExists('historical_technomechanics');
    }
};

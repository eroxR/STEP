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
        Schema::create('historical_five_senses_drivings', function (Blueprint $table) {
            $table->id();//id_historicos_cinco_sentidos_conduccion
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('Five_Senses_Driving_certification');//certificado_cinco_sentidos_conduccion
			
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
        Schema::dropIfExists('historical_five_senses_drivings');
    }
};

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
        Schema::create('historical_first_responders', function (Blueprint $table) {
            $table->id();//id_historicos_primeros_respondiente
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('First_Responder_certification');//certificado_primeros_respondiente
			
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
        Schema::dropIfExists('historical_first_responders');
    }
};

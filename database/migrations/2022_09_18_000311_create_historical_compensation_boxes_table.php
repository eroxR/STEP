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
        Schema::create('historical_compensation_boxes', function (Blueprint $table) {
            $table->id();//id_historico_caja_compensacion
			$table->unsignedBigInteger('user_id')->nullable();//id_usuario
			$table->unsignedBigInteger('id_compensationbox')->nullable();//id_caja_compensacion
			$table->date('renewal_date');//fecha_renovacion
			
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('id_compensationbox')->references('id')->on('compensation_boxes')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_compensation_boxes');
    }
};

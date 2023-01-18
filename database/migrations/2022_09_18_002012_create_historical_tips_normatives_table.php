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
        Schema::create('historical_tips_normatives', function (Blueprint $table) {
            $table->id();//id_historicos_tips_normativos
			$table->unsignedBigInteger('driver_id')->nullable();//conductor
			$table->date('Tips_Normative_certification');//certificado_tips_normativos
			
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
        Schema::dropIfExists('historical_tips_normatives');
    }
};

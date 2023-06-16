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
        Schema::create('historical_layoffs', function (Blueprint $table) {
            $table->id();//id_historico_cesantias
			$table->unsignedBigInteger('user_id')->nullable();//id_usuario
			$table->unsignedBigInteger('layoffs_id')->nullable();//id_cesantias
			$table->date('renewal_date');//fecha_renovacion
			
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('layoffs_id')->references('id')->on('layoffs')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_layoffs');
    }
};

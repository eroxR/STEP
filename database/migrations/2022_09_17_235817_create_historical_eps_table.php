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
        Schema::create('historical_eps', function (Blueprint $table) {
            $table->id();//id_historico_eps
			$table->unsignedBigInteger('user_id')->nullable();//id_usuario
			$table->unsignedBigInteger('eps_id')->nullable();//id_eps
			$table->date('renewal_date');//fecha_renovacion
			
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('eps_id')->references('id')->on('eps')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_eps');
    }
};

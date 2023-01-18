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
        Schema::create('contract_user', function (Blueprint $table) {
            $table->id();//idcontratos_usuarios
			$table->unsignedBigInteger('user_id');//usuario
			$table->unsignedBigInteger('contract_id');//contrato
			
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
			$table->foreign('contract_id')->references('id')->on('contracts')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_user');
    }
};

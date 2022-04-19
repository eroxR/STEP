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
            $table->id();
			$table->unsignedBigInteger('user');
			$table->unsignedBigInteger('contract');
			
			$table->timestamps();
			
			$table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
			$table->foreign('contract')->references('id')->on('contracts')->onUpdate('cascade');
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

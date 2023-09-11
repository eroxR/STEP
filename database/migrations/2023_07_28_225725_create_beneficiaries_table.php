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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100)->nullable();//nombre_completo
            $table->string('document', 15)->nullable();//documento_completo
            $table->enum('beneficiaryType', ['1', '2', '3'])->nullable();//estado['Adulto mayor','Conyugue','Hijo o Hijastro']
            $table->unsignedBigInteger('user_id');//id_usuario
           
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
};

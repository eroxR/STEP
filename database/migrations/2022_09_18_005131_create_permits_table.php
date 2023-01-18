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
        Schema::create('permits', function (Blueprint $table) {
            $table->id();//idFuec
			$table->unsignedBigInteger('contract')->nullable();//id_contrato
			$table->date('permit_start_date');//fecha_inicio_permiso
			$table->date('permit_end_date');//fecha_fin_permiso
			$table->integer('permit_number');//numero_consecuente_permiso
            $table->string('permit_code', 30);//codigo_unico_permiso
            $table->enum('fuec_state', ['0','1','2','3','4'])->default('1');  //estado_permiso['INICIAL','EN CURSO','PENDIENTE','FINALIZADO','CANCELADO'])->default('INICIAL');
			
			$table->timestamps();
			
			$table->foreign('contract')->references('id')->on('contracts')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permits');
    }
};

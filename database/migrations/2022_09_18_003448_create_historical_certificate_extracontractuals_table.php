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
        Schema::create('historical_certificate_extracontractuals', function (Blueprint $table) {
            $table->id();//id_historicos_certificado_extracontractual
			$table->date('certificate_extracontractual');//expiración_certificate_extracontractual
            $table->unsignedBigInteger('vehicle_id')->nullable();//vehiculo
			
			$table->timestamps();
			
			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_certificate_extracontractuals');
    }
};

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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('id');//idNotificacion
			$table->unsignedBigInteger('alertStatus_id')->nullable();//estado_alerta
			$table->unsignedBigInteger('alertType_id')->nullable();//tipo_alerta
			$table->text('description_alert');//descripcion_alerta
			$table->timestamp('date_alert');//fecha_alerta
			$table->integer('profile_alert');//perfil_alerta
			
			$table->timestamps();
			
			$table->foreign('alertStatus_id')->references('id')->on('alert_statuses')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('alertType_id')->references('id')->on('alert_types')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
};

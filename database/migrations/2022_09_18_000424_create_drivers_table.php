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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();//id_conductor
			$table->unsignedBigInteger('user_id');//id_usuario
			$table->bigInteger('license_number')->nullable();//numero_licencia
			$table->unsignedBigInteger('license_category');//categoria_licencia
			$table->date('license_expiration')->nullable();//espiracion_licencia
			$table->date('certificate_drugs_alchoolemia')->nullable();//certificado_drogas_alchoolemia
			$table->date('SIMIT_queries')->nullable();//Consultas_SIMIT
			// $table->date('driving_exam')->nullable();//Examen_Conduccion
			// $table->date('Norm_Overland_Transportation_Automotive')->nullable();//Norma_Transporte_terrestre_automotor
			$table->date('Rules_Transit')->nullable();//Normas_Transito
			// $table->date('Normative_Tips')->nullable();//Tips_normativos
			// $table->date('Driving_Methods')->nullable();//Metodos_Conduccion
			$table->date('Defensive_driving')->nullable();//Manejo_Defensivo
			// $table->date('distractions')->nullable();//Distracciones
			$table->date('First_aid')->nullable();//Primeros_Auxilios
			// $table->date('First_Responder')->nullable();//Primero_Respondiente
			$table->date('psicosensometrico')->nullable();//cinco_sentidos_conduccion
			// $table->date('Active_Passive_Security_vehicle')->nullable();//Seguridad_activa_pasiva_vehiculo
			$table->date('Road_safety')->nullable();//Seguridad_Vial
			$table->enum('driver_status', ['1', '2'])->nullable();//estado_conductor['Inhabilitado','Habilitado']
			$table->integer('Linked')->nullable();//Vinculado
			
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('license_category')->references('id')->on('license_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};

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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('type_contract')->nullable();
			$table->string('route_trip_contract');
			$table->date('date_start_contract');
			$table->date('contract_end_date');
			$table->decimal('contract_value', $precision = 8, $scale = 2);
			$table->string('contracting_name', 120);
			$table->enum('state_contract', ['INICIAL','CANCELADO','EN CURSO','FINBALIZADO'])->default('INICIAL');
			$table->unsignedBigInteger('identification')->nullable();
			$table->integer('contract_document');
			$table->date('expedition_identificationcard');
			$table->string('contracting_phone');
			$table->string('contracting_direction', 150);
			$table->string('legal_representative', 120);
			$table->integer('passenger_quantity');
			$table->enum('total_disposition', ['SI', 'NO']);
			$table->integer('quantity_vehicle');
			$table->string('cooperation_contract', 60)->nullable();
			$table->string('entity_name', 60)->nullable();
			$table->string('secure_policy', 60)->nullable();
			$table->unsignedBigInteger('tipe_pay')->nullable();
			$table->date('contract_signing_date');
			$table->string('school_name', 150)->nullable();
			$table->string('address_school', 150)->nullable();
			$table->integer('identificationcard_represent_legal');
			$table->string('trip_from');
			$table->string('trip_to', 100);
			$table->string('place_of_origin', 100);
			$table->string('destination_place', 100);
			$table->string('return_place', 100);
			$table->integer('identificationcard_representative_group')->nullable();
			$table->string('group_representative_name', 60)->nullable();
			$table->date('dateofexpedition_representative_group', 100)->nullable();
			
			$table->timestamps();
			
			$table->foreign('type_contract')->references('id')->on('contract_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('tipe_pay')->references('id')->on('payment_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('identification')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};

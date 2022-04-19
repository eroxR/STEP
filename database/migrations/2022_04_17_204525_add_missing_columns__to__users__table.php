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
        Schema::table('users', function (Blueprint $table) {

            $table->unsignedBigInteger('identification')->nullable();
			$table->integer('identificationcard')->unique()->nullable();
			$table->string('firstname', 25);
			$table->string('secondname', 25)->nullable();
			$table->string('lastname', 25);
			$table->string('motherslastname', 25)->nullable();
			$table->date('birthdate')->nullable();
			$table->integer('age')->nullable();
			$table->enum('type_sex', ['F', 'M'])->nullable();
			$table->unsignedBigInteger('country')->nullable();
			$table->unsignedBigInteger('Department')->nullable();
			$table->unsignedBigInteger('city')->nullable();
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			$table->string('phone_cellular')->nullable();
			$table->string('nit', 12)->unique()->nullable();
			$table->unsignedBigInteger('eps')->nullable();
			$table->enum('eps_status', ['ACTIVO', 'INACTIVO'])->nullable();
			$table->timestamp('date_eps')->nullable();
			$table->unsignedBigInteger('blood_type')->nullable();
			$table->unsignedBigInteger('pension')->nullable();
			$table->enum('pension_status', ['ACTIVO', 'INACTIVO'])->nullable();
			$table->timestamp('date_pension')->nullable();
			$table->unsignedBigInteger('layoffs')->nullable();
			$table->enum('status_layoffs', ['ACTIVO', 'INACTIVO'])->nullable();
			$table->date('date_layoffs')->nullable();
			$table->unsignedBigInteger('arl')->nullable();
			$table->enum('arl-status', ['ACTIVO', 'INACTIVO'])->nullable();
			$table->timestamp('arl_date')->nullable();
			$table->unsignedBigInteger('compensationbox')->nullable();
			$table->enum('compensationbox_status', ['ACTIVO', 'INACTIVO'])->nullable();
			$table->timestamp('date_compensationbox')->nullable();
			$table->enum('user_state', ['ACTIVO', 'INACTIVO'])->nullable();
			$table->timestamp('user_entry_date')->nullable();
			$table->timestamp('date_withdrawal_user')->nullable();
			$table->unsignedBigInteger('charge')->nullable();
			$table->unsignedBigInteger('usertype')->nullable();
			$table->unsignedBigInteger('civil_status')->nullable();
			$table->unsignedBigInteger('family_document_type')->nullable();
			$table->string('family_names')->nullable();
			$table->unsignedBigInteger('relationship')->nullable();
			$table->string('family_address', 150)->nullable();
			$table->string('family_phone')->nullable();
			$table->string('family_phone_cellular')->nullable();
			$table->unsignedBigInteger('city_birth')->nullable();
			$table->unsignedBigInteger('place_expedition_identificationcard')->nullable();
			$table->date('identificationcard_expedition_date')->nullable();
			$table->unsignedBigInteger('binding_type')->nullable();
			$table->decimal('weight')->nullable();
			$table->decimal('pant_size', $precision = 8, $scale = 2)->nullable();
			$table->decimal('shirt_size', $precision = 8, $scale = 2)->nullable();
			$table->decimal('shoe_size', $precision = 8, $scale = 2)->nullable();
			$table->unsignedBigInteger('education_level')->nullable();
			$table->string('educational_institution', 150)->nullable();
			$table->year('last_year')->nullable();
			$table->date('study_end_date')->nullable();
			$table->string('obtained_title')->nullable();
			$table->string('last_company_name', 150)->nullable();
			$table->string('charges_last_company')->nullable();
			$table->date('start_date_last_company')->nullable();
			$table->date('date_end_last_company')->nullable();
			$table->text('functions_performed')->nullable();
			$table->string('supplier_name', 150)->nullable();
			$table->string('company_name_provider', 150)->nullable();
			$table->string('commercial_reason_supplier', 150)->nullable();
			$table->string('supplier_web_page')->nullable();
			$table->unsignedBigInteger('supplier_category')->nullable();
			$table->unsignedBigInteger('economic_activity')->nullable();
			$table->unsignedBigInteger('products_and_services')->nullable();
			$table->text('supplier_description')->nullable();
			$table->decimal('salary', $precision = 8, $scale = 2)->nullable();
			$table->decimal('aid_transport', $precision = 8, $scale = 2)->nullable();
			$table->unsignedBigInteger('work_area')->nullable();
			$table->string('username', 25)->unique();
	
			
			
			$table->foreign('country')->references('id')->on('countries')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('Department')->references('id')->on('provinces')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('city')->references('id')->on('cities')->onDelete('set null');
			$table->foreign('identification')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('civil_status')->references('id')->on('marital_statuses')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('eps')->references('id')->on('eps')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('pension')->references('id')->on('pensions')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('layoffs')->references('id')->on('layoffs')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('arl')->references('id')->on('arls')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('compensationbox')->references('id')->on('compensation_boxes')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('blood_type')->references('id')->on('blood_types')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('binding_type')->references('id')->on('bindings')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('place_expedition_identificationcard')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('work_area')->references('id')->on('work_areas')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('products_and_services')->references('id')->on('products_services')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('economic_activity')->references('id')->on('economic_activities')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('supplier_category')->references('id')->on('supplier_categories')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('charge')->references('id')->on('charges')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('usertype')->references('id')->on('usertypes')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('family_document_type')->references('id')->on('identifications')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('relationship')->references('id')->on('relationships')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('city_birth')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');
			$table->foreign('education_level')->references('id')->on('educational_levels')->onDelete('set null')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn( 'identification',
                                'identificationcard',
                                'firstname',
                                'secondname',
                                'lastname',
                                'motherslastname',
                                'birthdate',
                                'age',
                                'type_sex',
                                'country',
                                'Department',
                                'city',
                                'address',
                                'phone',
                                'phone_cellular',
                                'nit',
                                'eps',
                                'eps_status',
                                'date_eps',
                                'blood_type',
                                'pension',
                                'pension_status',
                                'date_pension',
                                'layoffs',
                                'status_layoffs',
                                'date_layoffs',
                                'arl',
                                'arl-status',
                                'arl_date',
                                'compensationbox',
                                'compensationbox_status',
                                'date_compensationbox',
                                'user_state',
                                'user_entry_date',
                                'date_withdrawal_user',
                                'charge',
                                'usertype',
                                'civil_status',
                                'family_document_type',
                                'family_names',
                                'relationship',
                                'family_address',
                                'family_phone',
                                'family_phone_cellular',
                                'city_birth',
                                'place_expedition_identificationcard',
                                'identificationcard_expedition_date',
                                'binding_type',
                                'weight',
                                'pant_size',
                                'shirt_size',
                                'shoe_size',
                                'education_level',
                                'educational_institution',
                                'last_year',
                                'study_end_date',
                                'obtained_title',
                                'last_company_name',
                                'charges_last_company',
                                'start_date_last_company',
                                'date_end_last_company',
                                'functions_performed',
                                'supplier_name',
                                'company_name_provider',
                                'commercial_reason_supplier',
                                'supplier_web_page',
                                'supplier_category',
                                'economic_activity',
                                'products_and_services',
                                'supplier_description',
                                'salary',
                                'aid_transport',
                                'work_area',
                                'username');

        });
    }
};

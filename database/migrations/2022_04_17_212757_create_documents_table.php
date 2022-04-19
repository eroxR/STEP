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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id');
			$table->unsignedBigInteger('documentable_id');
			$table->string('document_name')->unique();
			$table->string('extension', 6);
			$table->text('directory');
			$table->string('documentable_Type');
			$table->integer('state_document');
			$table->date('date');
			
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
};

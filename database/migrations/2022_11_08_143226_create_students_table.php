<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('dni',20)->nullable(false);
            $table->string('document_type',10)->nullable(false);
            $table->string('first_nane',255)->nullable(false);
            $table->string('last_name',255)->nullable(false);
            $table->integer('age')->nullable();
            $table->text('address')->nullable(false);
            $table->enum('working_day',['morning','afternoon'])->nullable(false);
            $table->string('email',255)->nullable(false);
            $table->enum('sex',['M','F'])->nullable(false);
            $table->string('name_acu',255)->nullable(false);
            $table->string('phone_acu',255)->nullable(false);
            $table->date('birthdate')->nullable(false);
            $table->string('photo',100)->nullable();
            $table->boolean('status')->nullable(false)->default(true);
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
        Schema::dropIfExists('students');
    }
}

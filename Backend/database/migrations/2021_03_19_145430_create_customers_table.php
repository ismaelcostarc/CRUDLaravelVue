<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->nullable(false);
            $table->string('medical_record', 20)->default('');
            $table->string('phone', 20)->default('');
            $table->string('cel', 20)->default('');
            $table->string('zipcode', 191)->default('');
            $table->string('address', 191)->default('');
            $table->string('complement', 191)->default('');
            $table->string('address_number', 191)->default('');
            $table->string('district', 191)->default('');
            $table->string('state', 255)->default('');
            $table->string('city', 191)->default('');
            $table->string('birth', 191)->default('');
            $table->string('age', 191)->default('');
            $table->string('gender', 191)->default('');
            $table->string('rg', 191)->default('');
            $table->string('organ_rg', 191)->default('');
            $table->string('cpf', 20)->default('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

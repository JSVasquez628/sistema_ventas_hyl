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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('country_name');
            $table->string('company_type');
            $table->string('nit')->unique();
            $table->string('phone');
            $table->string('correo');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('department');
            $table->string('neighborhood');
            $table->string('postal_code');
            $table->text('logo');
            
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
        Schema::dropIfExists('company');
    }
};

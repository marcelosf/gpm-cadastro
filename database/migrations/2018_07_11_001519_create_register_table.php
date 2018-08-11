<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->string('rg');
            $table->string('address');
            $table->integer('address_number');
            $table->string('address_complement')->nullable();
            $table->string('district');
            $table->string('zip_code');
            $table->string('state');
            $table->string('city');
            $table->string('bloody_type')->nullabel();
            $table->string('emergency_number');
            $table->string('emergency_name');
            $table->string('picture');
            $table->string('phone');
            $table->year('membership_year');
            $table->integer('membership_number');
            $table->boolean('cbm');
            $table->string('cbm_where')->nullable();
            $table->date('birth_date');
            $table->string('medical_assurence')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}

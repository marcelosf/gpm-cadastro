<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('users', function(Blueprint $table) {

            $table->string('fullname');
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
            $table->string('picture_file_name');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

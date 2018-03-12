<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('Phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('Gender');
            $table->string('Country');
            $table->string('State');
            $table->string('City');
            $table->string('Address');
            $table->integer('PostalCode');
            $table->string('Description');
            $table->string('Picture');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

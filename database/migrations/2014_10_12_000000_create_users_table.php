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
        /*
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            //$table->string('slug', 60);
            $table->string('email')->unique();
            $table->string('phone', 12);
            $table->string('organizacion', 60);
            $table->string('foto', 100)->default('/imgs/users/avatar.png');
        });
        */
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

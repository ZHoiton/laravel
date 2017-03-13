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
            $table->string('lastname');
            $table->string('dateofbirth');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('days');
            $table->string('avatar')->default('default.jpg');
            $table->string('password');
            $table->boolean('activated')->default(false);
            $table->integer('nrofdays')->default(1);
            $table->boolean('paid')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role',['admin','author','subscriber'])->default('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

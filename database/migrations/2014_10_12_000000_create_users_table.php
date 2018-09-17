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
            $table->string('foto');
            $table->string('names');
            $table->string('apeP');
            $table->string('apeM');
            $table->string('edad');
            $table->string('ocup');
            $table->text('desc');
            $table->string('premium');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedInteger('rol_id');
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

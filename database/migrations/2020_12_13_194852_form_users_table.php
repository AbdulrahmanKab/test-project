<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name',100);
            $table->string('email');
            $table->string('password',250);
            $table->text('bio');
            $table->integer('age');
            $table->string('image',250);
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
        Schema::dropIfExists('form_users');
    }
}

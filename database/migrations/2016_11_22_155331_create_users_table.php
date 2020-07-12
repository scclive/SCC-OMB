<?php

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
            $table->string('name')->nullable();
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();

            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('cnic')->nullable();
            $table->string('aboutme')->nullable();
            $table->string('employed')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('ssc')->nullable();
            $table->string('hssc')->nullable();
            $table->integer('rating')->nullable();

            $table->integer('role_id')->unsigned()->nullable();
            $table->foreign('role_id', 'fk_253_role_role_id_user')->references('id')->on('roles');
            $table->string('remember_token')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
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

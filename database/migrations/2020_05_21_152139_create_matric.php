<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatric extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matric', function (Blueprint $table) {
            $table->bigIncrements('mid');
            $table->integer('uid');
            $table->string('track');
            //12
            $table->string('english')->nullable();
            $table->string('urdu')->nullable();
            $table->string('islamiyat_Ethics')->nullable();
            $table->string('pakistan_Studies')->nullable();
            $table->string('mathematics')->nullable();
            $table->string('physics')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('biology')->nullable();
            $table->string('computer')->nullable();
            $table->string('general_sciences')->nullable();
            $table->string('economics')->nullable();
            $table->string('business_studies')->nullable();
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
        Schema::dropIfExists('matric');
    }
}

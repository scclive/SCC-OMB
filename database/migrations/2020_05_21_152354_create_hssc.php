<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHssc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hssc', function (Blueprint $table) {
            $table->bigIncrements('hid');
            $table->integer('uid');
            $table->string('track');
            //11
            $table->string('urdu')->nullable();
            $table->string('english')->nullable();
            $table->string('islamiyat_Ethics')->nullable();
            $table->string('pakistan_Studies')->nullable();
            $table->string('mathematics')->nullable();
            $table->string('physics')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('biology')->nullable();
            $table->string('computer')->nullable();
            $table->string('statistics')->nullable();
            $table->string('economics')->nullable();
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
        Schema::dropIfExists('hssc');
    }
}

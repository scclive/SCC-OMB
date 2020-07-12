<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForPersonalityTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personality', function (Blueprint $table) {
            $table->bigIncrements('pid');
            $table->string('user_id');
            $table->string('result');
            $table->string('conventional')->nullable();
            $table->string('enterprising')->nullable();
            $table->string('social')->nullable();
            $table->string('artistic')->nullable();
            $table->string('investigative')->nullable();
            $table->string('realistic')->nullable();
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
        Schema::dropIfExists('personality');
    }
}

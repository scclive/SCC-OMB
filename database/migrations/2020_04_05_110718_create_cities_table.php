<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('City_id');
            $table->string('Campus_City');
            $table->string('City_Name');
            $table->string('Campus_Phone');
            $table->string('Campus_Email');
            $table->string('Campus_Url');
            $table->integer('Uni_id')->unsigned();
            $table->foreign('Uni_id')->references('Uni_id')->on('universities')->onDelete('cascade');
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
        Schema::dropIfExists('cities');
    }
}

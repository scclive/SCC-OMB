<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->bigIncrements('Uni_id');
            $table->longText('Uni_Name');
            $table->string('Uni_Phone');
            $table->string('Uni_Email')->nullable();
            $table->string('Uni_Main')->nullable();
            $table->string('Uni_Sector');
            $table->string('Uni_Address')->nullable();;
            $table->string('Uni_Url');
            $table->string('Uni_Rank');
            $table->string('Uni_Files');
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
        Schema::dropIfExists('universities');
    }
}

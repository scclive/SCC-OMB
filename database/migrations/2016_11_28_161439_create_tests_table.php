<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->text('result')->nullable();
            $table->string('subject')->nullable();
            $table->string('total')->nullable();
            $table->string('percent')->nullable();
            $table->string('EnglishScore')->nullable();
            $table->string('AnalyticalScore')->nullable();
            $table->string('QuantitativeScore')->nullable();
            $table->string('subjectScore1')->nullable();
            $table->string('subjectScore2')->nullable();
            $table->string('subjectScore3')->nullable();
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
        Schema::dropIfExists('tests');
    }
}

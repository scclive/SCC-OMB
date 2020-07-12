<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olevels', function (Blueprint $table) {
            $table->bigIncrements('oid');
            $table->integer('uid');
            //15
            $table->string('art')->nullable();
            $table->string('biology')->nullable();
            $table->string('businessStudies')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('computerStudies')->nullable();
            $table->string('economics')->nullable();
            $table->string('englishLanguage')->nullable();
            $table->string('islamiyat')->nullable();
            $table->string('mathematicsAdditional')->nullable();
            $table->string('mathematicsD')->nullable();
            $table->string('pakistanStudies')->nullable();
            $table->string('religiousStudies')->nullable();
            $table->string('sociology')->nullable();
            $table->string('urduFirstLanguage')->nullable();
            $table->string('urduSecondLanguage')->nullable();
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
        Schema::dropIfExists('olevels');
    }
}

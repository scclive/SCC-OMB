<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alevels', function (Blueprint $table) {
            $table->bigIncrements('aid');
            $table->integer('uid');
            //22
            $table->string('accounting')->nullable();
            $table->string('aICT')->nullable();
            $table->string('art')->nullable();
            $table->string('biology')->nullable();
            $table->string('businessStudies')->nullable();
            $table->string('chemistry')->nullable();
            $table->string('computerScience')->nullable();
            $table->string('economics')->nullable();
            $table->string('englishLanguage')->nullable();
            $table->string('englishLiterature')->nullable();
            $table->string('environmentalManagement')->nullable();
            $table->string('globalPerspectives')->nullable();
            $table->string('governmentPolitics')->nullable();
            $table->string('history')->nullable();
            $table->string('law')->nullable();
            $table->string('mathematics')->nullable();
            $table->string('mathematicsFurther')->nullable();
            $table->string('mediaStudies')->nullable();
            $table->string('physics')->nullable();
            $table->string('psychology')->nullable();
            $table->string('sociology')->nullable();
            $table->string('urdu')->nullable();
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
        Schema::dropIfExists('alevels');
    }
}

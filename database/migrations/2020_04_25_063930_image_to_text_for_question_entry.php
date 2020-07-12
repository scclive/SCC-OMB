<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageToTextForQuestionEntry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocr', function (Blueprint $table) {
            $table->bigIncrements('OCR_id');
            $table->string('Image_Dir');
            $table->string('Image_Text')->nullable();
            $table->string('Image_Traversed')->nullable();
            $table->string('Image_Conversion', 10000)->nullable();
            $table->string('Image_Remote')->nullable();
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
        Schema::dropIfExists('ocr');
    }
}

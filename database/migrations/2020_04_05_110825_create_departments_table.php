<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('Dep_id');
            $table->longText('Dep_Name');
            $table->integer('City_id')->unsigned();
            $table->foreign('City_id')->references('City_id')->on('cities')->onDelete('cascade');
            $table->longText('Dep_Tags')->nullable();
            /* $table->date('Dep_UpdateDate'); */
            $table->text('Dep_fees')->nullable();
            $table->text('Dep_PrevAggr')->nullable();
            $table->text('Dep_AggrMatric')->nullable();
            $table->text('Dep_AggrHssc')->nullable();
            $table->text('Dep_AggrNts')->nullable();
            $table->date('Dep_AddmDeadline')->nullable();
            $table->longText('Dep_TestName')->nullable();
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
        Schema::dropIfExists('departments');
    }
}

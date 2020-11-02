<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    Schema::create('department',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');    
            // $table->unsignedBigInteger('doctor_id');
            // $table->foreign('doctor_id')->references('id')->on('doctor');
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
        //
    }
}

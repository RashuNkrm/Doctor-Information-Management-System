<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Schedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('schedule',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->date('schedule_date');
            $table->time('schedule_time');
            $table->string('schedule_day');    
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('department');

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

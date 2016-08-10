<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('give_user_id');
            $table->integer('take_user_id');
            $table->integer('day');
            $table->integer('activity_id');
            $table->integer('question_id');
            $table->integer('measure');
            $table->integer('answer');
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

        Schema::drop('evaluates');
    }
}

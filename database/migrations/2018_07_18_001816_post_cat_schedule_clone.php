<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostCatScheduleClone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_cat_schedule_clone', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('post_cat_schedule_id')->unsigned();
			$table->foreign('post_cat_schedule_id')->references('id')->on('post_cat_schedule');
			
			$table->integer('clone_id')->unsigned();
			$table->foreign('clone_id')->references('id')->on('clone');
			
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
        Schema::dropIfExists('post_cat_schedule_clone');
    }
}

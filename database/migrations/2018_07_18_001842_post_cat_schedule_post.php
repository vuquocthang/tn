<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostCatSchedulePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_cat_schedule_post', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('post_cat_schedule_id')->unsigned();
			$table->foreign('post_cat_schedule_id')->references('id')->on('post_cat_schedule');
			
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('post');
			
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
        Schema::dropIfExists('post_cat_schedule_post');
    }
}

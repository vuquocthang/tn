<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_schedule', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('post')->on('id');
			$table->date('posted_at');
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
        Schema::dropIfExists('post_schedule');
    }
}

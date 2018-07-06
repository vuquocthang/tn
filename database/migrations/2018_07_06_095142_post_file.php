<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_file', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->string('filename');
			
			$table->foreign('post_id')
				->references('id')->on('post')
				->onDelete('cascade');
			
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
        Schema::dropIfExists('post_file');
    }
}

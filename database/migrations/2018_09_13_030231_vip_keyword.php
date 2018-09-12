<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VipKeyword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vip_keyword', function (Blueprint $table) {
            $table->increments('id');
			
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('users')->on('id');
			
			$table->integer('status')->default(0);
			$table->string('type');
			$table->string('key')->nullable();
			$table->string('value');
			
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
        Schema::dropIfExists('vip_keyword');
    }
}

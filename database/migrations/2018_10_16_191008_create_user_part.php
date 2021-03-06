<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_part', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('done');
            $table->integer('user_id')->unsigned();
            $table->integer('part_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('user_part', function (Blueprint $table) {
            $table->foreign('part_id')->references('id')->on('parts');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_part');
    }
}

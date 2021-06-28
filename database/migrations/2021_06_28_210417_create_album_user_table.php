<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_user', function (Blueprint $table) {
            $table->primary(['user_id','album_id']);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('album_id')->unsigned();
            $table->integer('rate');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('album_id')
                ->references('id')
                ->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_user');
    }
}

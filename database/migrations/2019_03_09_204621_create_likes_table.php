<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('comentario_id')->nullable();
            $table->unsignedBigInteger('foto_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');            
            $table->foreign('foto_id')->references('id')->on('fotos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['foto_id']);            
        });
        Schema::dropIfExists('likes');
    }
}

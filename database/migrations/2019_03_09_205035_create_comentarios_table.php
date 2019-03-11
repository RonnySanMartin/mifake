<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('contenido');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('foto_id');
            $table->unsignedTinyInteger('status_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('foto_id')->references('id')->on('fotos');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['foto_id']);
            $table->dropForeign(['status_id']);

        });
        Schema::dropIfExists('comentarios');
    }
}

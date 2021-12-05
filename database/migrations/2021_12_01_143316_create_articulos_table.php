<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id','40');
            $table->string('titulo','255')->nullable();
            $table->string('imagen','150')->nullable();
            $table->string('subtitulo','150')->nullable();
            $table->text('contenido','102')->nullable();
        //declaracion de llaves foraneas
            //$table->integer('categoria_id')->unsigned();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            //$table->integer('imagen_id')->unsigned();
            $table->unsignedBigInteger('imagen_id')->nullable();
            $table->foreign('imagen_id')->references('id')->on('imagenes')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}

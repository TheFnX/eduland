<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('imagen')->nullable();
            $table->string('descripcion', 1000)->nullable();
            $table->date('fecha')->nullable();
            $table->string('Hora_inicio');
            $table->string('duracion')->nullable();
            $table->string('trainer1')->nullable();
            $table->string('trainer2')->nullable();
            $table->string('trainer3')->nullable();
            $table->string('precio')->nullable();
            $table->string('contenido',1000);




            
            $table->enum('estado', ['aceptado', 'rechazado', 'pendiente'])->nullable();

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->unsignedBigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')
            ->references('id')->on('categorias')
            ->onDelete('cascade');



            $table->softDeletes();
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
        Schema::dropIfExists('eventos');
    }
}

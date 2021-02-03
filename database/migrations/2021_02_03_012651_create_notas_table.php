<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('notas', function (Blueprint $table) {
        $table->Increments('id_Notas');
        $table->text('mensaje');
        $table->integer('id_tareas')->unsigned();
        $table->foreign('id_tareas')->references('id')->on('tasks')->onDelete('cascade');
        $table->string('email');
        $table->timestamps();
        

        // Schema::create('notas', function (Blueprint $table) {
        //     $table->unsignedInteger('id')->nullable();
        //     $table->integer('puntuacion',30);
        //     $table->unsignedInteger('nota_id')->unique; 
        //     $table->foreign('nota_id')
        //         ->references('id')
        //         ->on('notas')
        //         ->onDelete('cascade');
        //     $table->integer('estrellas',50);
        //     $table->string('comentario',100); 
        //     $table->primary('id');                     
        //     $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}

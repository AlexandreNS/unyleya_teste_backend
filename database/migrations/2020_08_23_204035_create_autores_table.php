<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('autores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('anoNascimento')->nullable();
            $table->enum('sexo', ['M', 'F']);
            $table->unsignedInteger('nacionalidade_id')->nullable();

            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidade');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('autores');
        Schema::enableForeignKeyConstraints();
    }
}

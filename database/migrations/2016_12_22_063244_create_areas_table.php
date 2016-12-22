<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Migracion para tabla Areas
     * 0 fisica
     * 1 matematicas
     * 2 programacion
     * 3 quimica
     * 
     * Ver el archivo database/seeds/AreasTableSeeder para ver los datos insertados
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned();
            $table->primary('id');
            $table->string('nombre');
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
        Schema::dropIfExists('areas');
    }
}

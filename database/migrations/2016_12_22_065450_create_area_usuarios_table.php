<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaUsuariosTable extends Migration
{
    /**
     * Tabla que relacion a un usuario con las areas a las que pertenece
     * Ejemplo usuario 1 pertenece a area 1,2,3 (mate,progra,quimica)
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_usuarios', function (Blueprint $table) {
            $table->smallInteger('usuario_id')->unsigned();
            $table->smallInteger('area_id')->unsigned();
            $table->primary(['usuario_id','area_id']);
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
        Schema::dropIfExists('area_usuarios');
    }
}

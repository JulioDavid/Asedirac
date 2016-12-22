<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->unsignedSmallInteger('id');
            $table->primary('id');            
            $table->timestamps();

            $table->string('descripcion')->nullable();

            /**
            * 0 secundaria
            * 1 prepa
            * 2 universidad
            **/
            $table->unsignedSmallInteger('nivel')->default(0);

            /**
            * 0 a domicilio
            * 1 en linea
            * 2 lugar a convenir
            **/
            $table->unsignedSmallInteger('modalidad')->default(0);

            $table->float('precio',5,2)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precios');
    }
}

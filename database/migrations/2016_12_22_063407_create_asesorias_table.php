<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesorias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //datos de asesorias
            $table->string('materia')->nullable();
            $table->string('descripcion')->nullable();
            $table->dateTime('fecha');
            $table->unsignedSmallInteger('semanas')->nullable();
            $table->unsignedSmallInteger('meses')->nullable();
            $table->unsignedSmallInteger('rating')->nullable();
            $table->float('precio',5,2)->nullable();
            $table->unsignedSmallInteger('horas')->default(2);
            $table->integer('descuento')->default(0);
            /**
            * Columna estatus
            * 0 pendiente. Es cuando el alumno lo solicita
            * 1 asignado = por pagar. Cuando un asesor ya ha sido asignado. Puede pagar la asesoria
            * 2 concretado. El cliente ya pago la asesoria
            * 3 finalizado. La asesoria ya se dio.
            * 10 cancelado. El alumno lo cancelo
            * 11 no finalizado. Por alguna razon, la asesoria se pagó pero el asesor no fue a dar clase
            **/
            $table->unsignedSmallInteger('estatus')->default(0);    
            /**
            * 0 a domicilio
            * 1 en linea
            * 2 lugar a convenir
            **/
            $table->unsignedSmallInteger('modalidad')->default(0);


            /**
            ************** LLAVES FORANEAS *****************   
            **/            

            //llave foranea alumno
            $table->integer('alumno_id')
                ->unsigned();

            $table->foreign('alumno_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            

            //llave foranea asesor
            $table->integer('asesor_id')
                ->unsigned()->nullable();

            $table->foreign('asesor_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');            
            

            //llave foranea para el area a la que pertenece una asesoria
            $table->smallInteger('area_id')->unsigned()->nullable();
            //llave foranea de area
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesorias');
    }
}

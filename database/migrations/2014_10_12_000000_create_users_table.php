<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            
            /** Datos en comun alumnos y asesor **/
            $table->string('apellidos')->nullable();                        
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero_calle')->nullable();
            $table->string('colonia')->nullable();
            $table->string('delegacion_municipio')->nullable();
            $table->string('cp',5)->nullable();
            $table->string('ciudad')->nullable();
            $table->string('estado')->nullable();
            $table->string('institucion')->nullable();
            $table->string('foto')->nullable()->default('img/avatar.jpg');
            /**
            * 0 secundaria
            * 1 media superior
            * 2 superior
            * 3 posgrado
            **/
            $table->smallInteger('nivel')->default(0);
            $table->string('carrera')->nullable();
            /**
            * opciones de genero
            * 0 femenino
            * 1 masculino
            * 2 otro
            **/
            $table->smallInteger('genero')->default(0);            
                              
            /**
            * Roles
            * 0 Alumno
            * 1 Asesor
            * 2 Admin
            **/
            $table->smallInteger('rol')->default(0);   


            /** DATOS BANCARIOS **/
            $table->string('tarjeta')->nullable();
            $table->date('expiracion')->nullable();
            $table->string('cvc')->nullable();   

            /** DATOS PROPIOS DEL ALUMNO **/
            $table->string('email_tutor')->nullable();
            $table->string('nombre_tarjetahabiente')->nullable();
            $table->string('nombre_tutor')->nullable();

            /** DATOS PROPIOS DEL ASESOR **/
            $table->string('facebook')->nullable();
            $table->integer('cantidad_asesorias')->nullable();
            $table->text('habilidades')->nullable();
            $table->text('hobbies')->nullable();
            $table->integer('edad')->nullable();
            $table->longText('descripcion')->nullable();
            $table->text('especialidad')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

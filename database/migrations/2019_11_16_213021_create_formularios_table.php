<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellidop');
            $table->string('apellidom');
            $table->string('fichadeposito');
            $table->string('correo');
            $table->string('municipio');
            $table->string('escuela');
            $table->string('tipoescuela');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('curso');
            $table->string('nivelingles');
            $table->string('vocacion');
            $table->string('premio');
            $table->string('tipopremio');
            $table->string('seguirvocacion');
            $table->string('profesion');
            $table->string('quiensoy');
            $table->string('deseosnecesidades');
            $table->string('intereses');
            $table->string('fortalezas');
            $table->string('areastalento');
            $table->string('valores');
            $table->string('metascp');
            $table->string('metasmp');
            $table->string('metaslp');
            $table->string('pendiente');
            $table->string('aspectosmejorar');
            $table->string('accionesmejorar');
            $table->string('valoresconsolidar');
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
        Schema::dropIfExists('formularios');
    }
}

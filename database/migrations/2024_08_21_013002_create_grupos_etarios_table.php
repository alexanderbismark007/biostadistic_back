<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposEtariosTable extends Migration
{
    public function up()
    {
        Schema::create('grupos_etarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del grupo etario (e.g., Infancia, Adolescencia)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grupos_etarios');
    }
}


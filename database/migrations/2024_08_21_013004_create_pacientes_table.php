<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del paciente
            $table->date('fecha_nacimiento'); // Fecha de nacimiento del paciente
            $table->string('genero'); // Género del paciente (e.g., Masculino, Femenino, Otro)
            $table->unsignedBigInteger('grupo_etario_id'); // Relación con grupos_etarios
            $table->unsignedBigInteger('departamento_id'); // Relación con departamentos
            $table->timestamps();

            $table->foreign('grupo_etario_id')->references('id')->on('grupos_etarios');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

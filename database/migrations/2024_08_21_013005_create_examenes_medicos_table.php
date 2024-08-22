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
        Schema::create('examenes_medicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id'); // Relación con pacientes
            $table->unsignedBigInteger('tipo_examen_medico_id'); // Relación con tipos_examenes_medicos
            $table->date('fecha'); // Fecha del examen
            $table->text('resultado'); // Resultado del examen
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('tipo_examen_medico_id')->references('id')->on('tipos_examenes_medicos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes_medicos');
    }
};

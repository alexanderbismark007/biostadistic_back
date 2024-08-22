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
        Schema::create('diagnosticos_pacientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id'); // Relación con pacientes
            $table->unsignedBigInteger('diagnostico_id'); // Relación con diagnosticos
            $table->date('fecha'); // Fecha del diagnóstico
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosticos_pacientes');
    }
};

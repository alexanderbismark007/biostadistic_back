<?php

namespace Database\Factories;

use App\Models\DiagnosticoPaciente;
use App\Models\Paciente;
use App\Models\Diagnostico;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiagnosticoPacienteFactory extends Factory
{
    protected $model = DiagnosticoPaciente::class;

    public function definition()
    {
        return [
            'paciente_id' => Paciente::inRandomOrder()->first()->id,
            'diagnostico_id' => Diagnostico::inRandomOrder()->first()->id,
            'fecha' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}

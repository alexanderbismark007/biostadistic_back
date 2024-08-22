<?php

namespace Database\Factories;

use App\Models\ExamenMedico;
use App\Models\Paciente;
use App\Models\TipoExamenMedico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamenMedicoFactory extends Factory
{
    protected $model = ExamenMedico::class;

    public function definition()
    {
        return [
            'paciente_id' => Paciente::inRandomOrder()->first()->id,
            'tipo_examen_medico_id' => TipoExamenMedico::inRandomOrder()->first()->id,
            'fecha' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'resultado' => $this->faker->sentence,
        ];
    }
}

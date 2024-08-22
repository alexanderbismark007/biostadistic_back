<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\GrupoEtario;
use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'fecha_nacimiento' => $this->faker->date('Y-m-d', 'now - 18 years'),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'grupo_etario_id' => GrupoEtario::inRandomOrder()->first()->id,
            'departamento_id' => Departamento::inRandomOrder()->first()->id,
        ];
    }
}

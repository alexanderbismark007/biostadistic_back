<?php

namespace Database\Factories;

use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartamentoFactory extends Factory
{
    protected $model = Departamento::class;

    public function definition()
    {
        $departamentosBolivia = [
            'Pando',
            'La Paz',
            'Cochabamba',
            'Oruro',
            'Potosí',
            'Tarija',
            'Chuquisaca',
            'Santa Cruz',
            'Beni'
        ];

        return [
            'nombre' => $this->faker->randomElement($departamentosBolivia),
        ];
    }
}

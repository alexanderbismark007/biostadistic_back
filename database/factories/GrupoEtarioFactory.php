<?php

namespace Database\Factories;

use App\Models\GrupoEtario;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoEtarioFactory extends Factory
{
    protected $model = GrupoEtario::class;

    public function definition()
    {
        $grupos = ['Infancia', 'Adolescencia', 'Adultez', 'Vejez'];
        return [
            'nombre' => $this->faker->randomElement($grupos),
        ];
    }
}

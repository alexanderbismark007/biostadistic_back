<?php

namespace Database\Factories;

use App\Models\TipoExamenMedico;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoExamenMedicoFactory extends Factory
{
    protected $model = TipoExamenMedico::class;

    public function definition()
    {
        $tipos = ['Examen de Sangre', 'Radiografía', 'Resonancia Magnética', 'Electrocardiograma', 'Ultrasonido'];
        return [
            'nombre' => $this->faker->randomElement($tipos),
        ];
    }
}

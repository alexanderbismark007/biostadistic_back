<?php

namespace Database\Factories;

use App\Models\Diagnostico;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiagnosticoFactory extends Factory
{
    protected $model = Diagnostico::class;

    public function definition()
    {
        $diagnosticos = ['Diabetes', 'Hipertensión', 'Asma', 'Anemia', 'Artritis'];
        return [
            'nombre' => $this->faker->randomElement($diagnosticos),
        ];
    }
}

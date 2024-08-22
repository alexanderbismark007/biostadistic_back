<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diagnostico;

class DiagnosticoSeeder extends Seeder
{
    public function run()
    {
        $diagnosticos = ['Diabetes', 'Hipertensión', 'Asma', 'Anemia', 'Artritis'];
        foreach ($diagnosticos as $diagnostico) {
            Diagnostico::create(['nombre' => $diagnostico]);
        }
    }
}

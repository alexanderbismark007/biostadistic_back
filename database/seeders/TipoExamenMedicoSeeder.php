<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoExamenMedico;

class TipoExamenMedicoSeeder extends Seeder
{
    public function run()
    {
        $tipos = ['Examen de Sangre', 'Radiografía', 'Resonancia Magnética', 'Electrocardiograma', 'Ultrasonido'];
        foreach ($tipos as $tipo) {
            TipoExamenMedico::create(['nombre' => $tipo]);
        }
    }
}

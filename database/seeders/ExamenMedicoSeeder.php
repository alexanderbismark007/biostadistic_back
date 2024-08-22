<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExamenMedico;

class ExamenMedicoSeeder extends Seeder
{
    public function run()
    {
        $batchSize = 10000;  // Tamaño del lote
        $totalRecords = 20000;  // Total de registros que deseas insertar

        for ($i = 0; $i < $totalRecords / $batchSize; $i++) {
            ExamenMedico::factory()->count($batchSize)->create();
            echo "Lote " . ($i + 1) . " insertado.\n";
        }
    }
}

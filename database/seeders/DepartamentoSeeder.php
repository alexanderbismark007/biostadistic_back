<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    public function run()
    {
        // Crear 9 registros únicos, uno para cada departamento
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

        foreach ($departamentosBolivia as $departamento) {
            Departamento::factory()->create(['nombre' => $departamento]);
        }
    }
}

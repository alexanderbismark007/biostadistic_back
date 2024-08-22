<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GrupoEtario;

class GrupoEtarioSeeder extends Seeder
{
    public function run()
    {
        $grupos = ['Infancia', 'Adolescencia', 'Adultez', 'Vejez'];

        foreach ($grupos as $grupo) {
            GrupoEtario::create(['nombre' => $grupo]);
        }
    }
}

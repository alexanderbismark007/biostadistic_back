<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Usuario pruena',
            'email' => 'user@devxpress.com',
        ]);

        $this->call([
            DepartamentoSeeder::class,
            GrupoEtarioSeeder::class,
            TipoExamenMedicoSeeder::class,
            DiagnosticoSeeder::class,
            PacienteSeeder::class,
            ExamenMedicoSeeder::class,
            DiagnosticoPacienteSeeder::class,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiagnosticoPacienteController extends Controller
{
    public function porTipo()
    {
        return DB::table('diagnosticos_pacientes')
            ->join('diagnosticos', 'diagnosticos_pacientes.diagnostico_id', '=', 'diagnosticos.id')
            ->select('diagnosticos.nombre as diagnostico', DB::raw('count(*) as total'))
            ->groupBy('diagnostico')
            ->get();
    }

    public function porDepartamento()
    {
        return DB::table('diagnosticos_pacientes')
            ->join('pacientes', 'diagnosticos_pacientes.paciente_id', '=', 'pacientes.id')
            ->join('departamentos', 'pacientes.departamento_id', '=', 'departamentos.id')
            ->select('departamentos.nombre as departamento', 'diagnosticos_pacientes.diagnostico_id', DB::raw('count(*) as total'))
            ->groupBy('departamento', 'diagnostico_id')
            ->get();
    }
}

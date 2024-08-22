<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        return Paciente::with(['grupoEtario', 'departamento'])->get();
    }

    public function porDepartamento()
    {
        return Paciente::select('departamento_id', DB::raw('count(*) as total'))
            ->groupBy('departamento_id')
            ->with('departamento')
            ->get();
    }

    public function porGrupoEtario()
    {
        return Paciente::select('grupo_etario_id', DB::raw('count(*) as total'))
            ->groupBy('grupo_etario_id')
            ->with('grupoEtario')
            ->get();
    }
}

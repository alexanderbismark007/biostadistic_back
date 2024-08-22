<?php

namespace App\Http\Controllers;

use App\Models\ExamenMedico;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExamenMedicoController extends Controller
{
    public function index()
    {
        return ExamenMedico::with([
            'paciente.departamento',
            'paciente.grupoEtario',
            'tipoExamenMedico'
        ])->get();
    }

    public function porTipo()
    {
        return ExamenMedico::select('tipo_examen_medico_id', DB::raw('count(*) as total'))
            ->groupBy('tipo_examen_medico_id')
            ->with([
                'tipoExamenMedico',
                'paciente.departamento',
                'paciente.grupoEtario'
            ])
            ->get();
    }

}

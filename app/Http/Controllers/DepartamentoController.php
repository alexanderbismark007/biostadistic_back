<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    // Método para obtener todos los departamentos
    public function index()
    {
        return Departamento::all();  // Esto devuelve todos los registros de la tabla departamentos en formato JSON
    }
}

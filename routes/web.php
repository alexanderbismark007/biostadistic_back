<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ExamenMedicoController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\DiagnosticoPacienteController;

// Ruta para la página principal (opcional)
Route::get('/', function () {
    return view('welcome');
});

// Rutas para los departamentos
Route::get('/api/departamentos', [DepartamentoController::class, 'index']);

// Rutas para los pacientes
Route::get('/api/pacientes', [PacienteController::class, 'index']);
Route::get('/api/pacientes/por-departamento', [PacienteController::class, 'porDepartamento']);
Route::get('/api/pacientes/por-grupo-etario', [PacienteController::class, 'porGrupoEtario']);

// Rutas para los exámenes médicos
Route::get('/api/examenes-medicos', [ExamenMedicoController::class, 'index']);
Route::get('/api/examenes-medicos/por-tipo', [ExamenMedicoController::class, 'porTipo']);

// Rutas para los diagnósticos
Route::get('/api/diagnosticos', [DiagnosticoController::class, 'index']);
Route::get('/api/diagnosticos/por-tipo', [DiagnosticoPacienteController::class, 'porTipo']);
Route::get('/api/diagnosticos/por-departamento', [DiagnosticoPacienteController::class, 'porDepartamento']);

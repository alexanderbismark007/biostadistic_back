<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ExamenMedicoController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\DiagnosticoPacienteController;

// Rutas para los departamentos
Route::get('/departamentos', [DepartamentoController::class, 'index']);

// Rutas para los pacientes
Route::get('/pacientes', [PacienteController::class, 'index']);
Route::get('/pacientes/por-departamento', [PacienteController::class, 'porDepartamento']);
Route::get('/pacientes/por-grupo-etario', [PacienteController::class, 'porGrupoEtario']);

// Rutas para los exámenes médicos
Route::get('/examenes-medicos', [ExamenMedicoController::class, 'index']);
Route::get('/examenes-medicos/por-tipo', [ExamenMedicoController::class, 'porTipo']);

// Rutas para los diagnósticos
Route::get('/diagnosticos', [DiagnosticoController::class, 'index']);
Route::get('/diagnosticos/por-tipo', [DiagnosticoPacienteController::class, 'porTipo']);
Route::get('/diagnosticos/por-departamento', [DiagnosticoPacienteController::class, 'porDepartamento']);

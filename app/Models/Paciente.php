<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_nacimiento',
        'genero',
        'grupo_etario_id',
        'departamento_id'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function grupoEtario()
    {
        return $this->belongsTo(GrupoEtario::class);
    }

    public function examenesMedicos()
    {
        return $this->hasMany(ExamenMedico::class);
    }

    public function diagnosticosPacientes()
    {
        return $this->hasMany(DiagnosticoPaciente::class);
    }

    protected $table = 'pacientes';
}

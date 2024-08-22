<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenMedico extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'tipo_examen_medico_id',
        'fecha',
        'resultado'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function tipoExamenMedico()
    {
        return $this->belongsTo(TipoExamenMedico::class);
    }
    
    public function departamento()
    {
        return $this->hasOneThrough(Departamento::class, Paciente::class, 'id', 'id', 'paciente_id', 'departamento_id');
    }

    public function grupoEtario()
    {
        return $this->hasOneThrough(GrupoEtario::class, Paciente::class, 'id', 'id', 'paciente_id', 'grupo_etario_id');
    }
    protected $table = 'examenes_medicos';
}



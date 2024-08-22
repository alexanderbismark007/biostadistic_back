<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticoPaciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'diagnostico_id',
        'fecha'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function diagnostico()
    {
        return $this->belongsTo(Diagnostico::class);
    }

    protected $table = 'diagnosticos_pacientes';
}

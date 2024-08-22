<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoExamenMedico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function examenesMedicos()
    {
        return $this->hasMany(ExamenMedico::class);
    }

    protected $table = 'tipos_examenes_medicos';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoEtario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    protected $table = 'grupos_etarios';

}

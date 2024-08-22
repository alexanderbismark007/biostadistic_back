<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    protected $table = 'departamentos';
}

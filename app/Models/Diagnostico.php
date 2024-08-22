<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function diagnosticosPacientes()
    {
        return $this->hasMany(DiagnosticoPaciente::class);
    }

    protected $table = 'diagnosticos';
}

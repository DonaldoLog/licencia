<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    public $table = 'datos';

    public $fillable = [
        'idUsuario',
        'testMedico',
        'donar',
        'foto',
        'comprobanteDomicilio',
        'celular',
        'cp'
    ];
}

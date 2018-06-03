<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    public $table = 'licencia';

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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    public $table = 'proceso';

    public $fillable = [
        'idUsuario',
        'tipoProceso',
        'referencia',
        'costo',
        'estado'
    ];
}

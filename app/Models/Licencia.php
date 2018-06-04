<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    public $table = 'licencia';

    public $fillable = [
        'idUsuario',
        'tipoLice',
        'fechaIni',
        'fechaFin',
        'numLicencia'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table = 'usuario';

    public $fillable = [
        'nombre',
        'primerAp',
        'segundoAp',
        'curp',
        'folio'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    public $table = 'cat_estado';

    public $fillable = [
        'id',
        'nombre',
        'abreviatura'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoLocalidad extends Model
{
    protected $table = 'catalogo_localidad';

    protected $primaryKey = 'codigo_provincia';

    public $timestamps = false;

    protected $fillable = [
        'codigo_provincia',
        'codigo_ciudad',
        'provincia',
        'ciudad',
        'empresa',
    ];
}

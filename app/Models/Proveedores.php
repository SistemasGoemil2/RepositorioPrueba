<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';

    protected $primaryKey = 'proveedores_id';

    public $timestamps = false;

    protected $fillable = [
        'proveedores_id',
        'proveedores_nombre',
        'proveedores_correo',
        'proveedores_contrasena',
        'proveedores_estado',
    ];
}

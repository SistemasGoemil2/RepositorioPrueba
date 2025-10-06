<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecibirEnvios extends Model
{
    protected $table = 'recibir_envios';

    protected $primaryKey = 'recibir_envios_id';

    public $timestamps = false;

    protected $fillable = [
        'recibir_envios_id',
        'recibir_envios_numero',
        'recibir_envios_fecha',
        'recibir_envios_hora',
        'recibir_envios_estado',
    ];
}

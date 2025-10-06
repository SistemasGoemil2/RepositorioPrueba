<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacoras extends Model
{
    protected $table = 'bitacoras';

    protected $primaryKey = 'bitacoras_id';

    public $timestamps = false;

    protected $fillable = [
        'bitacoras_id',
        'bitacoras_paquetes_id',
        'bitacoras_fecha',
        'bitacoras_hora',
        'bitacoras_detalle',
        'bitacoras_usuarios_id',
        'bitacoras_estado',
        'bitacoras_observaciones',
        'bitacoras_impuesto'
    ];

    public function paquetes()
    {
        return $this->belongsTo(Paquete::class, 'bitacoras_paquetes_id', 'paquetes_id');
    }
    public function usuarios()
    {
        return $this->belongsTo(Usuarios::class, 'bitacoras_usuarios_id', 'usuarios_id');
    }
}

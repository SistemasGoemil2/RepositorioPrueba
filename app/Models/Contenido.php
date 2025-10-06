<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table = 'contenidos';

    protected $primaryKey = 'contenidos_id';

    public $timestamps = false;

    protected $fillable = [
        'contenidos_id',
        'contenidos_envios_id',
        'contenidos_cantidad',
        'contenidos_detalle',
    ];

    public function envios()
    {
        return $this->belongsTo(Envios::class, 'contenidos_envios_id', 'envios_id');
    }
}

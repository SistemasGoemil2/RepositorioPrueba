<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consolidacion extends Model
{
    protected $table = 'consolidaciones';

    protected $primaryKey = 'consolidaciones_id';

    public $timestamps = false;

    protected $fillable = [
        'consolidaciones_id',
        'consolidaciones_valor',
        'consolidaciones_paquetes_id',
        'consolidaciones_recaudaciones_id',
        'consolidaciones_descripcion',
    ];

    public function paquetes()
    {
        return $this->belongsTo(Paquete::class, 'consolidaciones_paquetes_id', 'paquetes_id');
    }
    public function recaudaciones()
    {
        return $this->belongsTo(Recaudacion::class, 'consolidaciones_recaudaciones_id', 'recaudaciones_id');
    }
}

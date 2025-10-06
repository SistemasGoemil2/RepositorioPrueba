<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturasCompras extends Model
{
    protected $table = 'facturas_compras';

    protected $primaryKey = 'facturas_compras_id';

    public $timestamps = false;

    protected $fillable = [
        'facturas_compras_id',
        'facturas_compras_envios_id',
        'facturas_compras_archivo',
        'facturas_compras_comentarios',
        'facturas_compras_estado'
    ];

    public function envios()
    {
        return $this->belongsTo(Envios::class, 'facturas_compras_envios_id', 'envios_id');
    }
}

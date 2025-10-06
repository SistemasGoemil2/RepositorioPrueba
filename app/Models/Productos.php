<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'productos_id';

    public $timestamps = false;

    protected $fillable = [
        'productos_id',
        'productos_nombre',
        'productos_tarifa',
        'productos_comision',
        'productos_add_tipo',
        'productos_add_valor',
        'productos_otros',
        'productos_migrante',
        'productos_estado',
    ];

    public function asignaciones()
    {
        return $this->hasMany(Asignaciones::class, 'asignaciones_productos_id', 'productos_id');
    }
    public function facturasEmitidas()
    {
        return $this->hasMany(FacturasEmitidas::class, 'facturas_emitidas_productos_id', 'productos_id');
    }
}

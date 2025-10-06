<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DespachoOficina extends Model
{
    protected $table = 'despachos_oficinas';

    protected $primaryKey = 'despachos_oficinas_id';

    public $timestamps = false;

    protected $fillable = [
        'despachos_oficinas_id',
        'despachos_oficinas_fecha',
        'despachos_oficinas_direcciones_id',
        'despachos_oficinas_estado',
        'despachos_oficinas_reenrutamiento',
        'despachos_oficinas_usuarios_id'
    ];

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'despachos_oficinas_direcciones_id', 'direcciones_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'despachos_oficinas_usuarios_id', 'usuarios_id');
    }
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_despachos_oficinas_id', 'despachos_oficinas_id');
    }
    public function sacasOficinas()
    {
        return $this->hasMany(SacasOficinas::class, 'sacas_oficinas_despachos_id', 'despachos_oficinas_id');
    }
}

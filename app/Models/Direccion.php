<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';

    protected $primaryKey = 'direcciones_id';

    public $timestamps = false;

    protected $fillable = [
        'direcciones_id',
        'direcciones_detalle',
        'direcciones_telefono',
        'direcciones_estado',
        'direcciones_localidades_id'
    ];

    public function despachoOficinas()
    {
        return $this->hasMany(DespachoOficina::class, 'despachos_oficinas_direcciones_id', 'direcciones_id');
    }

    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'direcciones_localidades_id', 'localidades_id');
    }
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_direcciones_id', 'direcciones_id');
    }
    public function usuarios()
    {
        return $this->hasMany(Usuarios::class, 'usuarios_direcciones_id', 'direcciones_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SacasOficinas extends Model
{
    protected $table = 'sacas_oficinas';

    protected $primaryKey = 'sacas_oficinas_id';

    public $timestamps = false;

    protected $fillable = [
        'sacas_oficinas_id',
        'sacas_oficinas_peso',
        'sacas_oficinas_estado',
        'sacas_oficinas_despachos_id',
        'sacas_oficinas_numeracion',
    ];

    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_sacas_oficinas_id', 'sacas_oficinas_id');
    }
    public function despachoOficina()
    {
        return $this->belongsTo(DespachoOficina::class, 'sacas_oficinas_despachos_id', 'despachos_oficinas_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';

    protected $primaryKey = 'regiones_id';

    public $timestamps = false;

    protected $fillable = [
        'regiones_id',
        'regiones_signo_peso',
        'regiones_peso',
        'regiones_signo_moneda',
        'regiones_tasa',
        'regiones_paises_id',
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'regiones_paises_id', 'paises_id');
    }
}

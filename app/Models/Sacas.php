<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sacas extends Model
{
    protected $table = 'sacas';

    protected $primaryKey = 'sacas_id';

    public $timestamps = false;

    protected $fillable = [
        'sacas_id',
        'sacas_peso',
        'sacas_estado',
        'sacas_embarques_id',
        'sacas_numeracion',
    ];
    public function paquetes()
    {
        return $this->hasMany(Paquete::class, 'paquetes_sacas_id', 'sacas_id');
    }
    public function embarque()
    {
        return $this->belongsTo(Embarques::class, 'sacas_embarques_id', 'embarques_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaceToPay extends Model
{
    protected $table = 'placetopay';

    protected $primaryKey = 'p2p_reference';

    public $timestamps = false;

    protected $fillable = [
        'p2p_reference',
        'p2p_site',
        'p2p_status',
        'p2p_requestId',
        'p2p_url',
        'p2p_date',
        'p2p_relacion',
        'p2p_usuario',
        'p2p_valor',
        'p2p_issuername',
        'p2p_recap',
        'p2p_line',
        'p2p_credit',
        'p2p_numero_cuotas',
        'p2p_receipt',
    ];
}

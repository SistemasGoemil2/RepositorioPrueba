<?php

use App\Models\Aereolinea;
use App\Models\Paquete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/campos', function () {
    $a = Paquete::first();
    echo $a; 
});

<?php

use App\Exemplo;
use Illuminate\Support\Facades\Route;

// app()->bind(Exemplo::class, function() {
//     return new \App\Exemplo;
// });

Route::get('/', function () {
    $instanciaExemplo = app()->make(Exemplo::class);

    dd($instanciaExemplo);
    
    
    //return view('welcome');
});

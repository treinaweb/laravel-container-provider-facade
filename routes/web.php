<?php

use Illuminate\Support\Facades\Route;

app()->bind('Exemplo', function() {
    return new \App\Exemplo;
});

Route::get('/', function () {
    $instanciaExemplo = app()->make('Exemplo');

    dd($instanciaExemplo);
    
    
    //return view('welcome');
});

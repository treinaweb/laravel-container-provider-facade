<?php

namespace App\Http\Controllers;

use App\Exemplo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Exemplo $exemplo)
    {
        dd($exemplo);
    }
}

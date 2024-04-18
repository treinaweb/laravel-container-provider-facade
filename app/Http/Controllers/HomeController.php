<?php

namespace App\Http\Controllers;

use App\ConsultaCEPInterface;
use App\Exemplo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(ConsultaCEPInterface $consultaCEP)
    {
        Session::put('test', 'treinaweb');
        echo Session::get('test');

        return View::make('welcome');

        // $consultaCEP->consulta('12345678');
    }
}

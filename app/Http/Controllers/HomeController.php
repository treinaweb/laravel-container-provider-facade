<?php

namespace App\Http\Controllers;

use App\ConsultaCEP;
use App\Exemplo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(ConsultaCEP $consultaCEP)
    {
        dd($consultaCEP->consulta('12345678'));
    }
}

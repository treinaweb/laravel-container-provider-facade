<?php

namespace App\Http\Controllers;

use App\ConsultaCEPInterface;
use App\Exemplo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(ConsultaCEPInterface $consultaCEP)
    {
        $consultaCEP->consulta('12345678');
    }
}

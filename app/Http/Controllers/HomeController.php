<?php

namespace App\Http\Controllers;

use App\ConsultaCEP;
use App\Exemplo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $instanciaConsultaCep1 = app()->make(ConsultaCEP::class);
        $instanciaConsultaCep2 = app()->make(ConsultaCEP::class);

        dd($instanciaConsultaCep1, $instanciaConsultaCep2);

        // $consultaCEP->consulta('12345678');
    }
}

<?php

namespace App\Http\Controllers;

use Facades\App\ConsultaCEPInterface;

class HomeController extends Controller
{
    public function index()
    {
        ConsultaCEPInterface::consulta('12345678');
    }
}
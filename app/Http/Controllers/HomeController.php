<?php

namespace App\Http\Controllers;

use App\ConsultaCEPInterface;
use Illuminate\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(SessionManager $sessionManager, Factory $view)
    {
        session()->put('test', 'treinaweb1234 ');
        echo session('test');

        Session::put('test', 'treinaweb');
        echo Session::get('test');

        $sessionManager->put('test', 'treinaweb');
        echo $sessionManager->get('test');

        return view('welcome');
        //return $view->make('welcome');

        // $consultaCEP->consulta('12345678');
    }
}

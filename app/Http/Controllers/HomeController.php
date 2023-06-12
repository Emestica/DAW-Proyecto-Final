<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use App\Utils\Constantes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('login', [ 'pageName' => Constantes::PAGE_NAME_LOGIN]);
    }

    public function home(){
        return view('general.home', [ 'pageName' => Constantes::PAGE_NAME_HOME ]);
    }
}
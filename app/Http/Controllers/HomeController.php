<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use App\Utils\Constantes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(Request $request){
        $user = $request->username;
        $password = $request->password;
        $obj = new UserRepository();
        return response()->json(json_encode($obj->validacionUsuario($user, $password)));
    }

    public function home(){
        return view('general.home', [ 'pageName' => Constantes::PAGE_NAME_HOME ]);
    }

    public function roles(){
        return view('security.rols', [ 'pageName' => Constantes::PAGE_NAME_ROLS ]);
    }
}

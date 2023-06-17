<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use App\Utils\Constantes;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function login(){
        return view('login', [ 'pageName' => Constantes::PAGE_NAME_LOGIN]);
    }

    public function signin(Request $request){
        $obj = new UserRepository();

        $request->validate([
            'usuario' => 'required|min:4|max:25',
            'contrasenia' => 'required|min:5|max:25',
        ]);

        $user = $request->usuario;
        $password = $request->contrasenia;

        $result = $obj->validacionUsuario($user, $password);

        if($result->code == Constantes::CODE_SUCCESSFULLY) {
            $request->session()->put(Constantes::LOGIN_ID, $result->object->id_usuario);
            return redirect('/panel');
        } else {
            return back()->with('fail', $result->message);
        }
    }
}

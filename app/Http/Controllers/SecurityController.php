<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use App\Utils\Constantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{
    public function inicarSesion(Request $request) {
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
            return redirect('/dashboard');
        } else {
            return back()->with('fail', $result->message);
        }

        //return response()->json(json_encode($obj->));
    }
}

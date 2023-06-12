<?php 

namespace App\Repository;

use App\Utils\Constantes;
use App\Utils\ResultClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository {

    public function validacionUsuario ($user, $password){
        $resultado = new ResultClass();
        $userObject = DB::table('usuarios')->where('usuario', $user)->first();

        if($userObject){
            if(Hash::check($password, $userObject->contrasenia)){
                $resultado->code = Constantes::CODE_SUCCESSFULLY;
                $resultado->isSuccess = true;
                $resultado->object = $userObject;
            } else {
                $resultado->code = Constantes::CODE_ERROR_USR_PASSWORD_INCORRECT;
                $resultado->isSuccess = false;
                $resultado->message = Constantes::MSG_ERROR_USR_PASSWORD_INCORRECT;
            }
        } else {
            $resultado->code = Constantes::CODE_ERROR_USR_NOT_FOUND;
            $resultado->isSuccess = false;
            $resultado->message = Constantes::MSG_ERROR_USR_NOT_FOUND;
        }
        return $resultado;
    }

}

?>
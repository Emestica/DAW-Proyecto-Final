<?php 

namespace App\Repository;

use App\Utils\Constantes;
use App\Utils\ResultClass;
use Illuminate\Support\Facades\DB;

class UserRepository {

    public function validacionUsuario ($user, $password){
        $resultado = new ResultClass();
        $userObject = DB::table('usuarios')->where('usuario', $user)->first();

        if($userObject){
            if($userObject->contrasenia == $password){
                $resultado->code = Constantes::CODE_SUCCESSFULLY;
                $resultado->isSuccess = true;
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
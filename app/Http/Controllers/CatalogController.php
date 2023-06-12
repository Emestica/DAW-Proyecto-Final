<?php

namespace App\Http\Controllers;

use App\Utils\Constantes;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Vistas
     */
    public function roles(){
        return view('security.rols', [ 'pageName' => Constantes::PAGE_NAME_ROLS ]);
    }
}

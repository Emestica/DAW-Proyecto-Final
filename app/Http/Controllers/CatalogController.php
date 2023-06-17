<?php

namespace App\Http\Controllers;

use App\Utils\Constantes;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function rols(){
        return view('catalog.rols', [ 'pageName' => Constantes::PAGE_NAME_ROLS ]);
    }
}

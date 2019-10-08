<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio(){
        $inicio = session ('inicio');
        return view ('inicio', compact(['inicio']));
    }
}

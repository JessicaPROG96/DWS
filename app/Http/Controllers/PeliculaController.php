<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //administra una única ruta
    //funciona como controlador principal, home 
    public function __invoke()
    {
        // return view('logout');
        return redirect()->action([RutasController::class, 'index']);
    }
    
    
}


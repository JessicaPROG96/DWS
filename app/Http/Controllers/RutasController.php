<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    //funciona como controlador del catalogo
    public function index(){
        return view('catalog.index');
    }
    public function create(){
        return view('catalog.create');
    }

    public function edit($id){
        return view('catalog.edit', array('id'=>$id));
        
    }

    public function show($id){  
        return view('catalog.show', array('id'=>$id));
    }
    
}


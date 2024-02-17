<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showHome(request $request){
        return view("home");
    }

    public function showFormularioCadastro(request $request){
        return view("formularioCadastroCliente");
    }
}
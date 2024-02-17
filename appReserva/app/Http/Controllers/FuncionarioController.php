<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showFormularioFuncionario(request $request){
        return view("formularioCadastroFuncionario");
    }
}

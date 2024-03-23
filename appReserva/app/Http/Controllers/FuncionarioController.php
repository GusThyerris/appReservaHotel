<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FuncionarioController extends Controller
{
    public function showFormularioCadastroFun(Request $request){
        return view("formularioCadastroFun");
        }

    public function cadFunc(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'funcao' => 'string|required',
        ]);

        Funcionario::create($dadosValidos);
        return Redirect::to('/');
    }

    public function gerenciarFuncionarioShow(){
        return view('gerenciarFuncionario');
    }

    public function gerenciarFuncionario(Request $request){
        $dadosFunc = Funcionario::query();
        $dadosFunc->when($request->nome, function($query, $valor){
            $query->where('nome', 'like','%'.$valor.'%');
        });
        $dadosFunc = $dadosFunc->get();

        return view('gerenciarFuncionario',['registroFuncionarios' => $dadosFunc]);
    }

    public function destroy(Funcionario $id){
        $id->delete();
        return Redirect::to('/');
    }

}
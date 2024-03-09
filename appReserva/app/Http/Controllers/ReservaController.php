<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class ReservaController extends Controller
{
    public function showFormularioReserva(request $request){
        return view("formularioCadastroReservas");
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request -> validate([
            'idCliente' => 'integer|required',
            'idFuncionario' => 'integer|required',
            'numeroQuarto' => 'integer|required',
            'situacao' => 'string|required',
            'valorTotal' => 'numeric|required',
            'dataSaida' => 'date|required',
            'dataEntrada' => 'date|required'
        ]);

        Reserva::create($dadosValidos);

        return Redirect::route('home');

    }

    public function gerenciarReserva(){
        return view('gerenciarReserva');
    }
}

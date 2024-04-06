@extends('layout')
@section('content')

<h1 class="text-center">Gerenciar dados das Reservas</h1>

<section class="container m-5">
  <div class="container m-5">
    <form >
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite o nome do Cliente" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Data da Entrada</th>
        <th scope="col">Data da Saída</th>
        <th scope="col">Valor Total</th>
        <th scope="col">Editar</th>
        <th scope="col">Exluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registroReserva as $rrLoop)
      <tr>
        <th scope="row">{{$rrLoop->id}}</th>
        <td>{{$rrLoop->dataEntrada}}</td>
        <td>Suíte{{$rrLoop->dataSaida}}</td>
        <td>{{$rrLoop->valortotal}}</td>
        <td>        
          <button type="button" class="btn btn-primary">X</button>
        </td>
        <td>
           <form method="post" action="{{route('apagar-funcionario', $rrLoop->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">X</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection

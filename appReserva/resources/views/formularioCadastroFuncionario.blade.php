@extends('layout')
@section('content')

<section class="container mt-5">
    <form class="row g-3" method="Post" action="{{route('envia-banco-funcionario')}}">
@csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Gustavo" >
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label">Função:</label>
            <input type="func" class="form-control" id="inputFunc" name="func" placeholder="Função">
        </div>

        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

    </form>
</section>

@endsection
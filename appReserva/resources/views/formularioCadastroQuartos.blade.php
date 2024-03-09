@extends('layout')
@section('content')

<section class="container mt-5">
    <form class="row g-3" method="Post" action="{{route('envia-banco-quarto')}}">
@csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Número do quarto:</label>
            <input type="number" class="form-control" id="inputNum" name="numeroQuarto" placeholder="1, 2, 3..." >
        </div>
        
        <div class="col-6">
            <label for="inputAddress" class="form-label">Valor:</label>
            <input type="number" class="form-control" id="inputValue" name="valorDiaria" placeholder="1234">
        </div>

        <div class="col-6">
            <select name="tipoQuarto" arial-label="Default select example">
                <option value="Clase A+">Classe A+</option>
                <option value="Comercial">Comercial</option>
                <option value="Suite">Suite</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection
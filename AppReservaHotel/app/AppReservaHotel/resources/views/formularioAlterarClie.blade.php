
@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('envia-db-clie')}}">
  
  @csrf  

    <div class="col-md-12">
        <label for="inputNome" class="form-label">Nome:</label>
        <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Gustavo Thyerris">
      </div>

      <div class="col-12">
        <label for="inputEmail" class="form-label">Email:</label>
        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="gusthyerris@gmail.com">
      </div>

      <div class="col-md-6">
        <label for="inputFone" class="form-label">Fone:</label>
        <input name="fone" type="tel" class="form-control" id="inputAddress" placeholder="11 956551862">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
  </form>

</section>

@endsection
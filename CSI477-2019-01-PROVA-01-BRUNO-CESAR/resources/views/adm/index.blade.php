@extends('layout')

@section('conteudo')
<h1> Area Administrativa</h1><hr>



<div class="card border-success mb-3" style="max-width: 50rem;">
    <form method="POST" action="{{ route('tipo.store') }}">
  <div class="card-header bg-transparent border-success" align="center"><h2>Cadastro Tipo</h2></div>
  <div class="card-body">
		@csrf
		<div class="form-group row">
			<label for="nome" class="col-md-2 col-form-label text-md-right"><b>Nome Tipo:</b></label>
			<div class="col-md-8">
				<input name="nome" type="text" class="form-control" value="" required autofocus>
			</div>
		</div>


  </div>
  <div class="card-footer bg-transparent border-success">
  			<div class="form-group row mb-0">
			<div class="col-md-9 offset-md-2">
				<p align="center"><button type="submit" class="btn btn-success">Cadastrar Tipo</button></p>
			</div>
		</div>
  </div>
  </form>
</div>


<hr>

<div class="card border-success mb-3" style="max-width: 50rem;">
	<form method="POST" action="{{ route('cliente.store') }}">
  <div class="card-header bg-transparent border-success" align="center"><h2>Cadastro Cliente</h2></div>
  <div class="card-body">
    @csrf
		<div class="form-group row">
			<label for="nome" class="col-md-2 col-form-label text-md-right">Nome Cliente</label>
			<div class="col-md-8">
				<input id="nome" type="text" class="form-control" name="nome" required autofocus>
			</div>
		</div>
  </div>
  <div class="card-footer bg-transparent border-info">
	<div class="form-group row mb-0">
			<div class="col-md-9 offset-md-2">
				<p align="center"><button type="submit" class="btn btn-success">Cadastrar Cliente</button></p>
			</div>
		</div>
  </div>

	</form>
</div>


@endsection
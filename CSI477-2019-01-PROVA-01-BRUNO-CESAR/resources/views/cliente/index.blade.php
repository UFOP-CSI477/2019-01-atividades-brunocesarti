@extends('layout')

@section('conteudo')
<div class="p-15 mb-4 container mt-4">

	<form method="POST" action="{{ route('trans.store') }}">
		@csrf

<div class="card border-success mb-3" style="max-width: 50rem;">
  <div class="card-header bg-transparent border-success" align="center"><b>Registrar Transação</b></div>
  <div class="card-body">
   	<div class="form-group row">
			<label for="cliente_id" class="col-md-3 col-form-label text-md-right">Cliente</label>
			<select name="cliente_id" class="form-control col-md-8">
				@foreach($clientes as $cl)
				<option value="{{$cl->id}}">{{$cl->nome}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group row">
			<label for="tipo_id" class="col-md-3 col-form-label text-md-right">Tipo</label>
			<select name="tipo_id" class="form-control col-md-8">
				@foreach($tipos as $tipo)
				<option value="{{$tipo->id}}">{{$tipo->nome}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group row">
			<label for="data" class="col-md-3 col-form-label text-md-right">Data</label>
			<input id="password" type="text" class="form-control col-md-8" name="data" required autofocus>
		</div>
		<div class="form-group row">
			<label for="credito" class="col-md-3 col-form-label text-md-right">Natureza da operação</label>
			<select name="credito" class="form-control col-md-8">
				<option value="1">Crédito</option>
				<option value="0">Débito</option>
			</select>
		</div>
		<div class="form-group row">
			<label for="valor" class="col-md-3 col-form-label text-md-right">Valor</label>
			<input id="valor" type="number" class="form-control col-md-5" name="valor" value="" required autofocus>
		</div>

  </div>
  <div class="card-footer bg-transparent border-info">
  		<div class="form-group row mb-0">
			<div class="col-md-9 offset-md-2">
				<p align="center"><button type="submit" class="btn btn-success">Cadastrar</button></p>
			</div>
		</div></div>
</div>


	</form>

</div>

@endsection
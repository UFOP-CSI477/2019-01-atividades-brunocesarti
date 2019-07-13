@extends('principal')

@section('titulo', 'Cadastro de Processo Seletivo')

@section('conteudo')

	<br>

	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
		<div class="card border-success">
	                <div class="card-header text-center bg-success text-white">
	                    Cadastro de Processo Seletivo
	                </div>
	                <div class="card-body">
	                    <form method="POST" action="{{ route('processoseletivo.store') }}">
	                        @csrf
	                        <div class="form-group row align-items-center">
	                            <label for="semestre" class="col-sm-2 col-form-label">Semestre</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="semestre" type="text" name="semestre" id="semestre">
	   	 						</div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="status" class="col-sm-2 col-form-label">Status</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" type="number" name="status" id="status">
	   	 						</div>
	                        </div>










	                </div>
	                <div class="card-footer bg-secondary border-success text-right">
	                	<div class="float-right">
	                		<a class="btn btn-primary btn" role="button" aria-pressed="true" href={{route('processoseletivo.index')}}>Voltar</a>
	                    	<button type="submit" class="btn btn-success">Cadastrar</button>
	                    	</form>
						</div>
	                </div>

            	</div>
          	</div>
        </div>
	</div>


@endsection
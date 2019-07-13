@extends('principal')

@section('titulo', 'Cadastro de Professor')

@section('conteudo')

	<br>

	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-10">
		<div class="card border-success">
	                <div class="card-header text-center bg-success text-white">
	                    Cadastro de Professor
	                </div>
	                <div class="card-body">
	                    <form method="POST" action="{{ route('professor.store') }}">
	                        @csrf
	                        <div class="form-group row align-items-center">
	                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="nome" type="text" name="nome" id="nome">
	   	 						</div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="inicio" class="col-sm-2 col-form-label">Data inicio</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" type="date" name="inicio" id="inicio">
	   	 						</div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="termino" class="col-sm-2 col-form-label">Data Termino</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" type="date" name="termino" id="termino">
	   	 						</div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="disciplina" class="col-sm-2 col-form-label">Disciplina</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" type="text" name="disciplina" id="disciplina">
	   	 						</div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="cel" class="col-sm-2 col-form-label">Celular</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" type="text" name="cel" id="cel">
	   	 						</div>
	                        </div>

	                        {{--<div class="form-group row">
	                            <label for="disciplina" class="col-sm-2 col-form-label">Disciplina</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" type="text" name="disciplina" id="disciplina">
	   	 						</div>
	                        </div>--}}


	                </div>
	                <div class="card-footer bg-secondary border-success text-right">
	                	<div class="float-right">
	                		<a class="btn btn-primary btn" role="button" aria-pressed="true" href={{route('professor.index')}}>Voltar</a>
	                    	<button type="submit" class="btn btn-success">Cadastrar</button>
	                    	</form>
						</div>
	                </div>

            	</div>
          	</div>
        </div>
	</div>


@endsection
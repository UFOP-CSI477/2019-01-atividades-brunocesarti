@extends('principal')

@section('titulo', 'Cadastro de Candidato')

@section('conteudo')

	<br>

	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-15">
		<div class="card border-success">
	                <div class="card-header text-center bg-success text-white">
	                    Cadastro de Candidato
	                </div>
	                <div class="card-body">
	                    <form method="POST" action="{{ route('candidato.store') }}">

	                        @csrf
	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Nome</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="nome" type="text" name="nome" id="nome">
	   	 						</div>
								</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Celular</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="cel" type="text" name="cel" id="cel">
	   	 						</div>
								</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Cpf</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="cpf" type="text" name="cpf" id="cpf">
	   	 						</div>
								</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Rg</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="rg" type="text" name="rg" id="rg">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Rua</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="rua" type="text" name="rua" id="rua">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Bairro</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="bairro" type="text" name="bairro" id="bairro">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Cidade</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="cidade" type="text" name="cidade" id="cidade">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Estado</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="estado" type="text" name="estado" id="estado">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Data nascimento</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="datanascimento" type="date" name="datanascimento" id="datanascimento">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-3 col-form-label">Ensino Fundamental</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="escolafund" type="text" name="escolafund" id="escolafund">
	   	 						</div>
	   	 						</div>

	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Ensino médio</label>
	                            <div class="col-sm-10">
	     							<input class="form-control" id ="escolamed" type="text" name="escolamed" id="escolamed">
	   	 						</div>
	   	 						</div>

	                       <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-5 col-form-label">Processo seletivo</label>
	                            <div class="col-sm-10">
	                            @foreach($processoseletivo as $p)
				@if ($p->status  == 1)
	     				<input class="form-control" id ="ps_id" type="text" name="ps_id" id="ps_id" value="{{ $p->id }}">
	     				@endif
	     		@endforeach
			</div>
			</div>

	                <div class=" bg-secondary border-success text-right">
	                	<div class="float-right">
	                		<a class="btn btn-primary btn" role="button" aria-pressed="true" href={{route('candidato.index')}}>Voltar</a>
	                    	<button type="submit" class="btn btn-success">Cadastrar</button>
	                </div>
	                </div>

	                    	</form>
						</div>
	                </div>
            	</div>
          	</div>
        </div>
	</div>


@endsection
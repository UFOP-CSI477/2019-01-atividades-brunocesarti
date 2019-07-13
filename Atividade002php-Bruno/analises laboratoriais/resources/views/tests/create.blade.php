@extends('principal')

@section('titulo', 'Marcação de Exame')

@section('conteudo')

	<br>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
				<div class="card border-success">
	                <div class="card-header bg-success text-center text-light">
	                    Marcação de Exame
	                </div>
	                <div class="card-body">
	                    <form method="POST" action="{{ route('tests.store') }}">
	                        @csrf
	                        <div class="form-group row align-items-center">
	                            <label for="paciente" class="col-sm-3 col-form-label">Paciente</label>
	                            <div class="col-sm-9">
	                            	@if(Auth::user()->type == 1)
	                            		<select class="form-control" name="user_id">
										@foreach($users as $u)
								            @if (Auth::user()->id == $u->id)
								               	<option value="{{ $u->id }}"selected> {{ $u->name }}</option>
								            @else
								               	<option value="{{ $u->id }}"> {{ $u->name }}</option>
								           @endif
								        @endforeach
								    @else
								    	@foreach($users as $u)
								            @if (Auth::user()->id == $u->id)
								               	<input class="form-control" type="text" name="name" id="price" disabled value="{{ $u->name}}">
								           @endif
								        @endforeach
								    @endif
								    </select>
	   	 						</div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="price" class="col-sm-3 col-form-label">Exame</label>
	                            <div class="col-sm-9">
	                            	<select class="form-control" name="procedure_id">
		     							@foreach($procedures as $p)
									        @if (Auth::user()->id == $p->id)
									           	<option value="{{ $p->id }}"selected> {{ $p->name }}</option>
									        @else
									            <option value="{{ $p->id }}"> {{ $p->name }}</option>
									        @endif
									    @endforeach
									</select>
	   	 						</div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="date" class="col-sm-3 col-form-label">Data</label>
	                            <div class="col-sm-9">
	                            	<input class="form-control" type="date" name="date" id="date">
	   	 						</div>
	                        </div>
	                </div>
	                <div class="card-footer bg-secondary border-success text-right">
	                	<div class="float-right">
	                    	<a class="btn btn-primary" role="button" aria-pressed="true" href={{route('tests.index')}}>Voltar</a>
	                    	<button type="submit" class="btn btn-success">Cadastrar</button>
	                    </form>
						</div>
	                </div>
            	</div>
          	</div>
        </div>
	</div>

@endsection
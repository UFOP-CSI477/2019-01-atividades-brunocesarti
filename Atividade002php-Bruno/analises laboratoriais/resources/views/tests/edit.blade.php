@extends('principal')

@section('titulo','Editar Exame')

@section('conteudo')

	<br>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
				<div class="card border-success">
	                <div class="card-header bg-success text-center text-light">
	                    Atualizar Exame
	                </div>
	                <div class="card-body">
	                    <form method="post" action="{{ route('tests.update', $test->id) }}">
							@csrf @method('PATCH')
							<div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-3 col-form-label">Paciente</label>
	                            <div class="col-sm-9">
	                            	@foreach($users as $u)
							            @if ( $test->user_id == $u->id)

	     									@if(Auth::user()->type!=1)
	     										<input class="form-control" id ="name" type="text" name="name" disabled value="{{$u->name}}">
	     									@else
	     										<select class="form-control" name="user_id">
													@foreach($users as $u)
											            @if (Auth::user()->id == $u->id)
											               	<option value="{{ $u->id }}"selected> {{ $u->name }}</option>
											            @else
											               	<option value="{{ $u->id }}"> {{ $u->name }}</option>
											           @endif
											        @endforeach
											       </select>
	     									@endif
							            @endif
							        @endforeach
	   	 						</div>
	                        </div>
	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-3 col-form-label">Exame</label>
	                            <div class="col-sm-9">
	     							<select class="form-control" name="procedure_id">
							            @foreach($procedures as $p)
							            	<option value="{{ $p->id }}"
							                @if ( $test->procedure_id == $p->id)
							                	selected
							                @endif
							                > {{ $p->name }}</option>
							            @endforeach
							        </select>
	   	 						</div>
	                        </div>
	                        <div class="form-group row align-items-center">
	                            <label for="name" class="col-sm-3 col-form-label">Data</label>
	                            <div class="col-sm-9">
	     							<input class="form-control" id ="name" type="date" name="date" value={{ $test->date }}>
	   	 						</div>
	                        </div>
	                </div>
	                <div class="card-footer bg-secondary border-success text-right">
	                	<div class="float-right">
	                		<a class="btn btn-primary btn" role="button" aria-pressed="true" href={{route('tests.show', $test->id )}}>Voltar</a>
							<input class="btn btn-success" type="submit" name="btnSalvar" value="Atualizar">
							</form>
						</div>
	                </div>
            	</div>
          	</div>
        </div>
	</div>

@endsection
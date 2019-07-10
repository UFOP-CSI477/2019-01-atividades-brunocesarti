@extends('principal')

@section('titulo','Exibir Exame')

@section('conteudo')

	<br>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
				<div class="card border-primary">
	                <div class="card-header bg-primary text-center text-light">
	                    <label>Exame</label>
	                </div>
	                <div class="card-info">
	                	<div class="list-group">
	                		@foreach($users as $u)
								@if($test->user_id == $u->id)
									<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Paciente: {{ $u->name }} </label>
								@endif
							@endforeach
							@foreach($procedures as $pd)
								@if($test->procedure_id == $pd->id)
									<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Exame: {{ $pd->name }} </label>
									<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Preço: {{ $pd->price }} </label>
								@endif
							@endforeach
							<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Data: {{ $test->date }} </label>
						</div>
					</div>
	                <div class="card-footer bg-secondary border-success text-right">
	                	<div class="d-flex justify-content-end">
	                	<a class="btn btn-primary btn-sm mr-2" role="button" aria-pressed="true" href={{ route('tests.index') }}>Voltar</a>
	                	<a class="btn btn-success btn-sm mr-2" role="button" aria-pressed="true" href={{ route('tests.edit',$test->id) }}>Editar</a>
						<form id="logout-form" method="post" action="{{ route('tests.destroy',$test->id) }}" onsubmit="return confirm('cofirma exclusão do exame?');">
							@csrf
							@method('DELETE')
							<input class="btn btn-danger btn-sm" type="submit" value="Excluir">
						</form>
	                </div>
            	</div>
          	</div>
        </div>
	</div>

@endsection
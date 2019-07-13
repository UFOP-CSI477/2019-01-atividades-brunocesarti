@extends('principal')

@section('titulo','Exibir Usuário')

@section('conteudo')

<br>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
				<div class="card border-success">
	                <div class="card-header bg-primary text-center text-light">
	                    <label>Usuário {{$user -> name}}</label>
	                </div>
	                <div 	>
	                	<div class="list-group">
							<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Nome: {{ $user->name }} </label>
							<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Email: {{ $user->email }} </label>
							<label class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">Nível de permissão:
								@if($user->type==1)
									<td> Administrador </td>
								@elseif ($user->type==2)
									<td> Operador </td>
								@elseif ($user->type==3)
									<td> Paciente </td>
								@endif
							</label>
						</div>
					</div>
	                <div class="card-footer bg-secondary border-success text-right">
	                	<div class="d-flex justify-content-end">
	                	<a class="btn btn-primary btn-sm mr-2" role="button" aria-pressed="true" href={{ route('users.index') }}>Voltar</a>
	                	<a class="btn btn-success btn-sm" role="button" aria-pressed="true" href={{ route('users.edit',$user->id) }}>Editar</a>
	                	<?php
							$bool = True;

	                	foreach ($procedures as $pd)
	                		if ($pd->user_id == $user->id)
								$bool = False;

	                	foreach ($tests as $t)
	                		if ($t->user_id == $user->id && $bool = True)
								$bool = False;
	                	?>

	                	@if ($bool == True)
	                		<form method="post" action="{{route('users.destroy',$user->id)}}" onsubmit="
	                			return confirm('cofirma exclusão do Usuário?');">
								@csrf
								@method('DELETE')
								<input class="btn btn-danger btn-sm ml-2" type="submit" value="Excluir">
							</form>
						@endif

	                </div>
            	</div>
          	</div>
        </div>
	</div>
@endsection

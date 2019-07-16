@extends('layout')

@section('titulo', 'Usuários')

@section('conteudo')

	<div class="p-3 mb-2 container mt-4">
	<div>
		<h2>Gerenciamento de Usuários</h2>
	</div>
		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead>
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Editar</th>
		</tr>
		</thead>

		@foreach($user as $u)
			<tr>
				<td> {{ $u->name }} </td>
				<td> {{ $u->email }} </td>
				@if($u->type==1)
					<td> Administrador </td>
				@elseif ($u->type==2)
						<td> Operador </td>
				@elseif ($u->type==3)
						<td> Paciente </td>
				@endif
				<td><a href="{{route('users.show',$u->id)}}">Exibir</a></td>
			</tr>
		@endforeach

	</table>

		<div class="float-right">
			<a class="btn btn-outline-success" role="button" aria-pressed="true" href={{ route('users.create') }}>Cadastrar usuário</a>
		</div>

	</div>

@endsection
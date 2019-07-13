@extends('principal')

@section('titulo', 'Candidato')

@section('conteudo')

	<div class="p-3 mb-2 container mt-4">
	<div>
		<h2>Relação de Candidatos</h2>
	</div>
		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead>
		<tr>
			<th>CPF</th>
			<th>RG</th>
			<th>Nome</th>
			<th>Ação</th>
		</tr>
		</thead>

		@foreach($candidato as $c)
			<tr>
				<td> {{ $c->cpf }} </td>
				<td> {{ $c->rg }} </td>
				@foreach($users as $u)
					@if($c->user_id == $u->id)
						<td> {{ $u->name }} </td>
					@endif
				@endforeach
				<td><a href="{{route('candidato.show', $c->id )}}">Exibir</a></td>
			</tr>
		@endforeach

	</table>

	<div class="float-right">
		<a class="btn btn-outline-success" role="button" aria-pressed="true" href={{ route('candidato.create') }}>Novo candidato</a>
	</div>

	</div>


@endsection
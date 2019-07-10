@extends('principal')

@section('titulo', 'Procedimentos')

@section('conteudo')

	<div class="p-3 mb-2 container mt-4">
	<div>
		<h2>Relação de Procedimentos</h2>
	</div>
		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead>
		<tr>
			<th>Nome</th>
			<th>Preço</th>
			<th>Resposável</th>
			<th>Ação</th>
		</tr>
		</thead>

		@foreach($procedures as $p)
			<tr>
				<td> {{ $p->name }} </td>
				<td> {{ $p->price }} </td>
				@foreach($users as $u)
					@if($p->user_id == $u->id)
						<td> {{ $u->name }} </td>
					@endif
				@endforeach
				<td><a href="{{route('procedures.show', $p->id )}}">Exibir</a></td>
			</tr>
		@endforeach

	</table>

	<div class="float-right">
		<a class="btn btn-outline-success" role="button" aria-pressed="true" href={{ route('procedures.create') }}>Novo procedimento</a>
	</div>

	</div>


@endsection
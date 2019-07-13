@extends('principal')

@section('titulo', 'Professor')

@section('conteudo')

	<div class="p-3 mb-2 container mt-4">
	<div>
		<h2>Relação de Professores</h2>
	</div>
		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead>
		<tr>
			<th>Nome</th>
			<th>Data Inicio</th>
			<th>Data Termino</th>
			<th>Disciplina</th>
			<th>Celular</th>
			<th>Ação</th>
		</tr>
		</thead>

		@foreach($professor as $p)
			<tr>
				<td> {{ $p->nome }} </td>
				<td> {{ $p->inicio }} </td>
				<td> {{ $p->termino }} </td>
				<td> {{ $p->disciplina }} </td>
				<td> {{ $p->cel }} </td>

				<td><a href="{{route('professor.show', $p->id )}}">Exibir</a></td>
			</tr>
		@endforeach

	</table>

	<div class="float-right">
		<a class="btn btn-outline-success" role="button" aria-pressed="true" href={{ route('professor.create') }}>Novo Professor</a>
	</div>

	</div>


@endsection
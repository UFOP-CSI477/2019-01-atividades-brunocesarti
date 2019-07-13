@extends('principal')

@section('titulo', 'Processoseletivo')

@section('conteudo')

	<div class="p-3 mb-2 container mt-4">
	<div>
		<h2>Relação de Processo Seletivo</h2>
	</div>
		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead>
		<tr>
			<th>Semestre</th>
			<th>Status</th>
			<th>Ação</th>
		</tr>
		</thead>

		@foreach($processoseletivo as $p)
			<tr>
				<td> {{ $p->nome }} </td>
					@if($p->status == 1)
						<td> {{ ABERTO }} </td>
					@endif
					@if($p->status == 2)
						<td> {{ FECHADO }} </td>
					@endif
				<td><a href="{{route('rocessoseletivo.show', $p->id )}}">Exibir</a></td>
			</tr>
		@endforeach

	</table>

	<div class="float-right">
		<a class="btn btn-outline-success" role="button" aria-pressed="true" href={{ route('processoseletivo.create') }}>Novo Processo seletivo</a>
	</div>

	</div>


@endsection
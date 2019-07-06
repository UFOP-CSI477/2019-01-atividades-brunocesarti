@extends('principal')

@section('titulo', 'Estados')

@section('conteudo')
	
	<div class="p-3 mb-2 container mt-4">
		
		<a href="{{ route('estados.create') }}">Inserir estado</a>

		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead class="thead-dark">
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Sigla</th>
			<th>Editar</th>
		</tr>
		</thead>

		@foreach($estados as $e)
			<tr>
				<td> {{ $e->id }} </td>
				<td> {{ $e->nome }} </td>
				<td> {{ $e->sigla }} </td>
				<td><a href="{{route('estados.show' ,$e->id)}}">Exibir</a></td>
			</tr>
		@endforeach

	</table>

	</div>
	

@endsection
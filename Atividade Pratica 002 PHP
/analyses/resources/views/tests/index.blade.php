@extends('principal')

@section('titulo', 'Exame')

@section('conteudo')

	<div class="p-3 mb-2 container mt-4">
	<div>
		<h2>Área do Paciente</h2>
	</div>
		<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead>
		<tr>
			<th>Paciente</th>
			<th>Procedimento</th>
			<th>Preço</th>
			<th>Data</th>
			<th>Ação</th>
		</tr>
		</thead>

		@foreach($tests as $t)
			@if (Auth::check())
				@if($t->user_id == Auth::user()->id || Auth::user()->type == 1)
					<tr>
						@foreach($users as $u)
							@if($t->user_id == $u->id)
								<td> {{ $u->name }} </td>
							@endif
						@endforeach
						@foreach($procedures as $pd)
							@if($t->procedure_id == $pd->id)
								<td> {{ $pd->name }} </td>
								<td> {{ $pd->price }} </td>
								@php
									$price = $price + $pd->price;
									$count = $count + 1;
								@endphp
							@endif
						@endforeach
						<td> {{ $t->date }} </td>
						<td><a href="{{route('tests.show',$t->id)}}">Exibir</a></td>
					</tr>
				@endif
			@endif
		@endforeach

		<tfoot>
			<tr class="table-success">
				<td colspan="4" class="font-weight-bold">
					Total de exames:
				</td>
				<td colspan="1" class="text-right font-weight-bold">
					{{$count}}
				</td>
			</tr>
			<tr class="table-success">
				<td colspan="4" class="font-weight-bold">
					Preço Total:
				</td>
				<td colspan="1" class="text-right font-weight-bold">
					{{$price}}
				</td>
			</tr>
		</tfoot>

		</table>

		<div class="float-right">
			<a class="btn btn-outline-success" role="button" aria-pressed="true" href={{ route('tests.create') }}>Marcar Exame</a>
		</div>

	</div>


@endsection
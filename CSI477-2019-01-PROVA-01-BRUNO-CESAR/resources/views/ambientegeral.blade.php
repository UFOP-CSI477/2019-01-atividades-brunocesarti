@extends('layout')

@section('conteudo')

<div class="p-3 mb-4 container mt-4">
<h1>Área Geral</h1>
<hr>

<div class="p-3 mb-4 container mt-4">
	<h2> Relatório > Relação de Transações do Cliente</h2>
<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead class="table-success">
			<tr>
				<th>Id Cliente</th>
				<th>Nome Cliente</th>
				<th>Id Tipo</th>
				<th>Nome Tipo</th>
				<th>Data</th>
				<th>Valor</th>
				<th>Status</th>
			</tr>
		</thead>

@php
	$cred = 0
@endphp
@php
	$deb = 0
@endphp
@php
	$total = 0
@endphp
@foreach($trans as $t)
	@if($t->credito == 0)
		@php
			$deb = $t->debito + $deb
		@endphp
	@else
		@php
			$cred = $t->credito + $cred
		@endphp
	@endif
@endforeach

@php
$total = $cred - $deb
@endphp


		@foreach($trans as $t)
		<tr>
			<td>{{$t->cliente_id}}</td>
			@foreach($clientes as $c)
				@if($c->id == $t->cliente_id)
					<td>{{$c->nome}}</td>
				@endif
			@endforeach
			<td>{{$t->tipo_id}}</td>
			@foreach($tipos as $tpo)
				@if($t->tipo_id == $tpo->id)
					<td>{{$tpo->nome}}</td>
				@endif
			@endforeach
			<td>{{$t->data}}</td>
			<td>{{$t->valor}}</td>
			@if($t->credito == 0)
			<td>Débito</td>
			@else
			<td>Crédito</td>
			@endif
		</tr>
		@endforeach
	</table>

	<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead class="table-success">
			<tr>
				<th>Total Débito</th>
				<th>Total Crédito</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<td>{{$deb}}</td>
		<td>{{$cred}}</td>
		<td>{{$total}}</td>
	</table>
</div>
<hr>
	<h2> Relatório > Relação de Tipos</h2>
	<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead class="table-success">
			<tr>
				<th>Id</th>
				<th>Nome</th>
			</tr>
		</thead>

		@foreach($tipos as $tp)
		<tr>
			<td>{{$tp->id}}</td>
			<td>{{$tp->nome}}</td>
		</tr>@endforeach
	</table>

</div>
<hr>
<div class="p-3 mb-4 container mt-4">
	<h2> Relatório > Relação de Clientes</h2>
<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
		<thead class="table-success">
			<tr>
				<th>Id</th>
				<th>Nome</th>
			</tr>
		</thead>

		@foreach($clientes as $cl)
		<tr>
			<td>{{$cl->id}}</td>
			<td>{{$cl->nome}}</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
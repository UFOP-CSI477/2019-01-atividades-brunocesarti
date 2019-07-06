@extends('principal')

@section('titulo', 'Inserir Estado')

@section('conteudo')
	
	<form method="post" action="{{ route('estados.store') }}">

		@csrf
		
		<P>Nome: <input type="text" name="nome"></P>
		<P>Sigla: <input type="text" name="sigla"></P>

		<input type="submit" name="btnSalvar" value="Incluir">

	</form>

@endsection
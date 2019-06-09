@extends('principal')

@section('titulo', 'Lista de pessoas na turma')

@section('conteudo')

<!-- Contúdo -- parte central //-->
<h2>Lista de pessoas na turma</h2>

<ol>
    @foreach($alunos as $a)
      <li>{{ $a }}</li>
    @endforeach
</ol>

@endsection
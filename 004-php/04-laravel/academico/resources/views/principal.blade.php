<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo','Sistema Acadêmico')</title>
  </head>
  <body>


<ul>
  <li> <a href="/">Home</a></li>
  <li> <a href="/">Welcome</a></li>
  <li> <a href="/alunos/listar">Listar</a></li>
  <li> <a href="/estados">Estados</a></li>
</ul>

@yield('conteudo')

  </body>
</html>

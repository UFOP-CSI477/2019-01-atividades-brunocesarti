<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo', 'Sistema Gestão Pré Vestibular: Rumo à Universidade')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-light bg-faded navbar-expand-sm" style="background-color: #a2000a; border-color: #000;">

  		<a href="/" class="navbar-brand text-white   ">Gestão Pré Vestibular: Rumo à Universidade</a>

  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal">
  			<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="menuPrincipal">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				{{--<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>--}}
				<li class="nav-item">
                                                                <a class="nav-link text-white" href="/professor">Controle de Professores</a>
                                                    </li><li class="nav-item">
					<a class="nav-link text-white" href="/candidato">Cadastro Processo Seletivo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/processoseletivo">Gestão de Processo Seletivo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/users">Área Administrativa</a>
				</li>
			</ul>

			<ul class="navbar-nav navbar-right pr-8 mr-8">
				@if (Auth::check())
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toogle text-white" href="#" data-toggle="dropdown">{{Auth::user()->name}}</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                        </form>
							{{-- <a class="dropdown-item" href={{Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout'])}}>Logout</a> --}}
						</div>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link text-white" href="/login">Login</a>
					</li>
				@endif
			</ul>

		</div>
	</nav>


	{{-- Notificações --}}
	@if( Session::has('mensagem') )
		<div class="container mt-4 mr-4 ml-4">
			<p><strong>{{ Session::get('mensagem') }}</strong></p>
		</div>
	@endif

	{{-- Conteúdo - parte central --}}

	@yield('conteudo')

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
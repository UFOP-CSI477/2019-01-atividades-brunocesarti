<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">


        <title>@yield('titulo','Sistema de Controle de Transações Financeiras')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>
                <nav class="navbar navbar-light bg-faded navbar-expand-sm" style="background-color: #043800; border-color: #000;">
        <a href="/" class="navbar-brand text-white">Home</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('ambgeral.index') }}">Área geral</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('cliente.index') }}">Área do cliente</a>
                </li>
                @if(Auth::check())
                    @if(Auth::user()->type == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('adm') }}">Área administrativa</a>
                    </li>
                    @endif
                @endif
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
                         <a class="nav-link text-white"  href="{{ route('login') }}">Login</a>
                        <a class="nav-link text-white"  href="{{ route('register') }}">Cadastrar-se</a>
                    </li>
                @endif
            </ul>

        </div>
    </nav>
     @if( Session::has('mensagem') )
    <div class="container alert alert-secondary alert-dismissible fade show mt-0" role="alert">
        <h6 class="align-middle">{{ Session::get('mensagem') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
@yield('conteudo')

</body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">$('.alert').alert()</script>

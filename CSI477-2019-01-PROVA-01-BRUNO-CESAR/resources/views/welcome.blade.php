@extends('layout')

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>@yield('titulo','Sistema de Controle de Transações Financeiras')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @section('conteudo')
    <br><br>


<div class="card border-success mb-3" style="max-width: 50rem;">
  <div class="card-header bg-transparent border-success"><h1>Bem Vindo!</h1></div>
  <div class="card-body text-success">
    <h5 class="card-title"><h2>Sistema de Controle de Transações Financeiras</h2></h5>

  </div>
  <div class="card-footer bg-transparent border-success">
                @if(Auth::check())
                    @if(Auth::user()->type  == 1)
                            <b>Parabéns! Você tem permissão de Administrador, e por isso esta vendo esta mensagem! Obrigado por usar nosso Sistema!</b>
                    @else
                        @if(Auth::user()->type  > 1)
                            <p class="card-text"><h2>Você esta em uma visão limitada de acesso!</h2></p>
                    @endif
                    @endif
                @else
                        <h2>Se ainda não tiver um login, cadastre-se!</h2></div>
                @endif
</div

    @endsection

    </body>
</html>
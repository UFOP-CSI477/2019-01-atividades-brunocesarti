@extends('layout')

@section('titulo', 'Cadastro de Usuário')

@section('conteudo')
	<br>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
        		<div class="card border-primary">

                <div class="card-header bg-transparent border-success" align="center">
                <b>Cadastro de usuário</b>
                </div>


                    <form method="POST" action="{{ route('register') }}">
                		<div class="card-body">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo:') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type">
								    <option value="1">Administrador</option>
								    <option value="2" selected>Cliente</option>
								    <option value="3">Usuário</option>
	                            </select>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control
                                @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer bg-ligth border-info text-right">
                    <p align="center"><button  type="submit" class="btn btn-outline-success" >Cadastrar</button></p>
                    </form>
            </div>
        </div>

            </div>
        </div>
	</div>

@endsection

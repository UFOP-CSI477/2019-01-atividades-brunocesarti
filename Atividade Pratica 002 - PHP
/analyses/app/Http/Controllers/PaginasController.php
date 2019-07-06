<?php

// PARA CRIAR UMA CONTROLER :
// php artisan make:controller PaginasController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
    	$nome = "Gabriel Augusto Requena dos Reis";
    	$usuario = "Gabiel-Reis";

    	return 	view('home')
    		-> with('nome', $nome)
    		-> with('user', $usuario);
	}


    public function about(){
    	return view('welcome');	
    }

    public function listar(){
    	$nome = "Gabriel";
    	$usuario = "Gabiel-Reis";
		$alunos = ['Ana', 'Brigida', 'Pedro', 'Ricardo'];

		return view('lista')
			-> with('nome', $nome)
    		-> with('user', $usuario)
			-> with('alunos', $alunos);
    }
}

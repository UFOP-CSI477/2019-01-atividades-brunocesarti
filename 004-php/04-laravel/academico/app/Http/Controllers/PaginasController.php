<?php
// PARA CRIAR UM CONTROLLER
// php artisan make:controller PaginasController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{

    public function index(){
    $nome = "Bruno";
    $usuario = "bruno";

    return view('principal')
                ->with('nome', $nome)
                ->with('user', $usuario);

    }

    public function about(){
        return view('welcome');
    }

    public function listar(){
        $alunos = ['Ana','Brígida','Pedro','Ricardo'];

        return view('lista')
                    ->with('alunos', $alunos);
    }
}

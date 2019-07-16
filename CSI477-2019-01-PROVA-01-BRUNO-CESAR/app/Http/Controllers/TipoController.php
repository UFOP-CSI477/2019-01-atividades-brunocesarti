<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
    public function store(Request $request){
		Tipo::create($request->all());
		session()->flash('mensagem', 'Cadastro de tipo realizado com sucesso!');
		return redirect()->route('ambgeral.index');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Tipo;


class ClienteController extends Controller
{
    public function create(){

    }
    public function index(){
    	$tipos = Tipo::orderBy('nome', 'asc')->get();
    	$clientes = Cliente::orderBy('nome', 'asc')->get();
        return view('cliente.index')->with('clientes',$clientes)->with('tipos',$tipos);
    }

    public function store(Request $request){
		Cliente::create($request->all());
		session()->flash('mensagem', 'Cliente inserido com sucesso!');
		return redirect()->route('ambgeral.index');
	}
}

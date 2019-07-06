<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;

use App\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except'=>['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Model -> REcuperação de dados
        //$estados = Estado::all(); TRAZ EM ORDEM DE CHAVE PRIMARIA
        $estados = Estado::orderBy('nome')->get();

        //View -> Apresentar
        return view('estados.index') -> with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Autenticação manual
        //Auth::user()->name
        //if(Auth::check())
            //if(Auth::user()->type == 1)
                //auth::logout();

        return view('estados.create');

        // else{
        //     return redirect()->route('login');
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add($request);
        // Validação - check up

        // return ()
        // return ($request -> input('nome'));
        // $estado = new Estado;
        // $estado -> nome = $request->nome;
        // $estado -> sigla = $request->sigla;
        // $estado->save();
        // return redirect('/estados');
        Estado::create($request->all());

        //Mensagen de sucesso
        // -- Flash
        // mensagem - campo
        session()->flash('mensagem', 'Estado inserido com sucesso!');


        return redirect()->route('estados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        // %id <-
        // $estado = Estado::find($id)
        return view('estados.show')->with('estado',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        //Validações ->

        // opçao 1
        // $estado->nome = $request->nome
        
        //opção 2
        $estado -> fill($request->all());

        //para ambas
        $estado->save();

        session()->flash('mensagem', 'Estado atualizado com sucesseo!');
        return redirect()->route('estados.show',$estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //Validacoes -> 
        // -- chave estrangeira

        //Excluir estado
        $estado->delete();
        session()->flash('mensagem', 'Estado excluido com sucesseo!');
        return redirect()->route('estados.index');
    }
}

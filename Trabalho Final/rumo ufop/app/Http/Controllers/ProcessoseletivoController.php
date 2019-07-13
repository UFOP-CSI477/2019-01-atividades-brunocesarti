<?php

namespace App\Http\Controllers;

use App\User;
use App\Professor;
use App\Processoseletivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessoseletivoController extends Controller
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
        $processoseletivo = Processoseletivo::orderBy('id')->get();
        $user = User::all();
        return view('processoseletivo.index') -> with('processoseletivo', $processoseletivo)-> with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type == 1) // 1 - adm, 2 - professor, 3 - candidato
            return view('processoseletivo.create');
        else
            return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->type == 1 || Auth::user()->type == 2){

            $request['user_id'] = Auth::user()->id;

            Processoseletivo::create($request->all());
            session()->flash('mensagem', 'Processo seletivo inserido com sucesso!');
            return redirect()->route('processoseletivo.index');
        }
        else
            return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\processoseletivo  $processoseletivo
     * @return \Illuminate\Http\Response
     */
    public function show(Processoseletivo $processoseletivo)
    {

        if(Auth::user()->type == 1){
            $ps = Processoseletivo::all();
            $user = User::all();
            return view('processoseletivo.show')->with('processoseletivo',$processoseletivo)->with('users', $user)->with('ps', $ps);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\processoseletivo  $processoseletivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Processoseletivo $processoseletivo)
    {
        if(Auth::user()->type == 1 ){
            $candidato->user_id = Auth::user()->id;
            return view('processoseletivo.edit')->with('processoseletivo',$processoseletivo);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\processoseletivo  $processoseletivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processoseletivo $processoseletivo)
    {
        if(Auth::user()->type == 1){
            $processoseletivo -> fill($request->all());
            $processoseletivo->save();
            session()->flash('mensagem', 'Processo seletivo atualizado com sucesseo!');
            return redirect()->route('processoseletivo.show',$processoseletivo->id);

        }
        else
            return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processoseletivo $processoseletivo)
    {
        if(Auth::user()->type == 1){

               session()->flash('mensagem', 'Processo seletivo excluido com sucesso!');
               return redirect()->route('processoseletivo.index');
        }
        else
            return redirect()->route('login');

    }
}

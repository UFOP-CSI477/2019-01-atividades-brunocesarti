<?php

namespace App\Http\Controllers;

use App\User;
use App\Candidato;
use App\Processoseletivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatoController extends Controller
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
        $candidato = Candidato::orderBy('nome')->get();
        $user = User::all();
        return view('candidato.index') -> with('candidato', $candidato)-> with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type == 1 || Auth::user()->type == 3){ // 1 - adm, 2 - professor, 3 - candidato
            $processoseletivo = Processoseletivo::all();
            return view('candidato.create')->with('processoseletivo',$processoseletivo);
        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->type == 1 || Auth::user()->type == 3){

            $request['user_id'] = Auth::user()->id;

            Candidato::create($request->all());
            session()->flash('mensagem', 'Candidato inserido com sucesso!');
            return redirect()->route('candidato.index');
        }
        else
            return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {

        if(Auth::user()->type == 1 || Auth::user()->type == 3){
            $ps = Processoseletivo::all();
            $user = User::all();
            return view('candidato.show')->with('candidato',$candidato)->with('users', $user)->with('ps', $ps);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        if(Auth::user()->type == 1 ){
            $candidato->user_id = Auth::user()->id;
            return view('candidato.edit')->with('candidato',$candidato);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        if(Auth::user()->type == 1){
            $candidato -> fill($request->all());
            $ps = Processoseletivo::all();
            $bool = True;
            foreach ($ps as $p)
                if ($p->status == 1){
                        $candidato->ps_id = $p_id;
                        $candidato->save();
                        session()->flash('mensagem', 'Candidato atualizado com sucesseo!');
                        return redirect()->route('candidato.show',$candidato->id);
                }else{
                        $candidato->ps_id = null;
                        $candidato->save();
                        session()->flash('mensagem', 'Candidato atualizado com sucesseo!');
                        return redirect()->route('candidato.show',$candidato->id);
                }
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
    public function destroy(Candidato $candidato)
    {
        if(Auth::user()->type == 1){
            $ps = Processoseletivo::all();
            $bool = True;
            foreach ($ps as $p)
                if ($p->id == $ps_id->id)
                    $bool = False;

            if($bool == True){
               $candidato->delete();
               session()->flash('mensagem', 'Candidato excluido com sucesso!');
               return redirect()->route('candidato.index');
            }
            else
                session()->flash('mensagem', 'Candidato possui esta participando de processoseltivo não pode ser excluido!');
                return redirect()->route('candidato.index');
        }
        else
            return redirect()->route('login');

    }
}

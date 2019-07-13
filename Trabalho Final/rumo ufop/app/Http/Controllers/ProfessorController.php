<?php

namespace App\Http\Controllers;

use App\User;
use App\Professor;
use App\Processoseletivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
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
        $professor = Professor::orderBy('nome')->get();
        $user = User::all();
        return view('professor.index') -> with('professor', $professor)-> with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type == 1) // 1 - adm, 2 - professor, 3 - candidato
            return view('professor.create');
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

            Professor::create($request->all());
            session()->flash('mensagem', 'Professor inserido com sucesso!');
            return redirect()->route('professor.index');
        }
        else
            return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {

        if(Auth::user()->type == 1 || Auth::user()->type == 2){
            $ps = Processoseletivo::all();
            $user = User::all();
            return view('professor.show')->with('professor',$professor)->with('users', $user)->with('ps', $ps);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        if(Auth::user()->type == 1 ){
            $candidato->user_id = Auth::user()->id;
            return view('professor.edit')->with('professor',$professor);
        }
        else
            return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        if(Auth::user()->type == 1){
            $professor -> fill($request->all());
            $professor->save();
            session()->flash('mensagem', 'Professor atualizado com sucesseo!');
            return redirect()->route('professor.show',$professor->id);

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
    public function destroy(Professor $professor)
    {
        if(Auth::user()->type == 1){

               session()->flash('mensagem', 'Professor excluido com sucesso!');
               return redirect()->route('candidato.index');
        }
        else
            return redirect()->route('login');

    }
}

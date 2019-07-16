<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Tipo;
use App\Trans;

class AreaGeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	$clientes = Cliente::orderBy('nome')->get();
    	$tipos = Tipo::orderBy('nome')->get();
            $trans = Trans::orderBy('valor')->get();

        return view('ambientegeral')->with('clientes',$clientes)->with('tipos',$tipos)->with('trans',$trans);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trans;

class TransController extends Controller
{
    public function store(Request $request){
		Trans::create($request->all());
		session()->flash('mensagem', 'Transação efetuada com sucesso!');
		return redirect()->route('ambgeral.index');
	}
}

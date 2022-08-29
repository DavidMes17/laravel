<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use function PHPSTORM_META\map;

class RankController extends Controller
{
    public function index(){
        return view('criar_conta');
    }

    public function perfil(){
        return view('criar_conta');
    }

    public function aparecer(){
        return view('quiz');
    }

    public function salvar(Request $request){

        $ranks = new rank;

        $ranks->nome = $request->nome;
        $ranks->pontos = $request->pontos;

        $ranks->save();

        return redirect('/Quiz3E');
    }

    public function Quiz3E(){

        $ranks = rank::orderBy('pontos', 'desc')->get();

        return view('quiz',['ranks' => $ranks]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use function PHPSTORM_META\map;

class RankController extends Controller
{
    public function index(){
        return view('welcomeM');
    }

    public function perfil(){
        return view('quizM');
    }

    public function ta(){
        return view('UcanMore');
    }

    public function quest(){
        return view('question');
    }

    public function salvar(Request $request){
        $ranks = new rank;

        $ranks->nome = $request->nome;

        $ranks->save();
        return redirect('/question');
    }

public function salva(Request $request){
    $ranks = new rank;

    $ranks->pontos = $request->string($_COOKIE["cook"]);
            $ranks->get();
        $ranks->save();

            return redirect('/TryAgain');
}

    public function mural(){

        $ranks = rank::orderBy('pontos', 'desc')->get();

        return view('score',['ranks' => $ranks]);
    }

}

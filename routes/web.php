<?php

use App\Http\Controllers\RankController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/salvar', [RankController::class, 'SalvarNome']);
Route::get('/question', [RankController::class, 'quest']);
Route::post('/question', [RankController::class, 'SalvarNome']);
Route::get('/score', [RankController::class, 'mural']);
Route::get('/Quiz3E', [RankController::class, 'perfil']);
Route::get('/TryAgain', [RankController::class, 'ta']);
<<<<<<< HEAD
Route::get('/pontos', [RankController::class, 'salva']);
Route::get('/pontos', [RankController::class, 'salva']);
=======
Route::post('/TryAgain', [RankController::class, 'SalvarPontos']);
>>>>>>> e07651a13fadc6aee22d7e7089fc9df9d450438e

Route::post('/criar_conta', [RankController::class, 'salva']);
Route::get('/criar_conta', [RankController::class, 'aparecer']);
Route::get('/teste', function () {return view('teste');});

Route::get('/', [RankController::class, 'index']);

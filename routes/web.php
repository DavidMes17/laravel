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

Route::get('/salvar', [RankController::class, 'salvar']);
Route::get('/question', [RankController::class, 'quest']);
Route::post('/question', [RankController::class, 'salvar']);
Route::get('/score', [RankController::class, 'mural']);
Route::get('/Quiz3E', [RankController::class, 'perfil']);
Route::get('/TryAgain', [RankController::class, 'ta']);

Route::post('/criar_conta', [RankController::class, 'salvar']);
Route::get('/criar_conta', [RankController::class, 'aparecer']);

Route::get('/', [RankController::class, 'index']);

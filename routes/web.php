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

Route::get('/conta', [RankController::class, 'conta']);
Route::get('/testar', [RankController::class, 'index']);
Route::get('/Quiz3E', [RankController::class, 'Quiz3E'])->name('quiz');

Route::post('/criar_conta', [RankController::class, 'salvar']);
Route::get('/criar_conta', [RankController::class, 'aparecer']);

Route::get('/', [RankController::class, 'index']);

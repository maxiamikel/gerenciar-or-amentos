<?php

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

use App\Http\Controllers\homeController;
use App\Http\Controllers\novoOrcamentoController;
use App\Http\Controllers\OrcamentoController;

Route::get('/', [homeController::class, 'index']);
Route::get('/orcamentos/novo', [novoOrcamentoController::class, 'index'] );
Route::get('/orcamentos/lista', [OrcamentoController::class, 'index']);

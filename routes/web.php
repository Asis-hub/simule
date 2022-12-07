<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculos\ControllerCalculo;

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

Route::get('/', fn() => view('auth.login'));

#Route::get('/', fn() => view('pages.login'));

Route::get('/register', fn() => view('auth.register'));

Route::get('/admin', fn() => view('pages.admin'));

Route::get('/listanominal', fn() => view('pages.listanominal'));

Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth'])->name('dashboard');

#Route::get('/admin', [ControllerCalculo::class, 'calcularMuestraDos']);

#Route::get('/lucky/number', [LuckyController::class, 'number']);

require __DIR__.'/auth.php';

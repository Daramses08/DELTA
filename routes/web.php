<?php

use App\Http\Controllers\PaymentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/Menu', [App\Http\Controllers\PaymentsController::class, 'Menu'])->name('Menu');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');


Route::get('/cursos', [App\Http\Controllers\HomeController::class, 'cursos'])->name('cursos');
Route::get('/DW', [App\Http\Controllers\HomeController::class, 'DW'])->name('DW');
Route::get('/CS', [App\Http\Controllers\HomeController::class, 'CS'])->name('CS');
Route::get('/RDC', [App\Http\Controllers\HomeController::class, 'RDC'])->name('RDC');
Route::get('/INF', [App\Http\Controllers\HomeController::class, 'INF'])->name('INF');
Route::get('/ELEC', [App\Http\Controllers\HomeController::class, 'ELEC'])->name('ELEC');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Menu;

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
    })->name('home');

    Route::get('visualizar', function () {
        return view('index');
    })->name('visualizar');

Route::get('visualizar/menu', function () {
    return view('visualizar-menu');
})->name('visualizar/menu');

    Route::get('/tipo-platillo', Menu::class);
Route::get('/platillo', \App\Http\Livewire\Platillo::class);

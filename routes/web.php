<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterData\SiswaController;
use App\Http\Controllers\MasterData\KelasController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// siswa
route::get('Masterdata/Siswa',[SiswaController::class,'Index'])->name('index');

// kelas
route::get('Masterdata/Kelas',[KelasController::class,'Index'])->name('index');

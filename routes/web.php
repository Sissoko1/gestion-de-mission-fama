<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mission/create', [App\Http\Controllers\missionController::class, 'viewForm'])->name('mission.register');
Route::get('/mission/dashboard', [App\Http\Controllers\missionController::class, 'ayira']); 
Route::post('/mission', [App\Http\Controllers\missionController::class, 'create'])->name('mission.register');

Route::post('/mission', [App\Http\Controllers\missionController::class, 'alldash']);

Route::get('/unite/create', [App\Http\Controllers\uniteController::class, 'viewForm'])->name('unite.register');
Route::get('/unite/dashboard', [App\Http\Controllers\uniteController::class, 'ayira']); 
Route::post('/unite', [App\Http\Controllers\uniteController::class, 'create'])->name('unite.register');

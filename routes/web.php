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

Route::get('/chefmission/form', [App\Http\Controllers\chefmissionController::class, 'viewForm'])->name('chefmissions.register');
Route::post('/chefmission/create', [App\Http\Controllers\chefmissionController::class, 'create'])->name('chefmissions.create');
Route::get('/chefmission/dashboard', [App\Http\Controllers\chefmissionController::class, 'ayira']); 
Route::get('/chefmission/liste', [App\Http\Controllers\chefmissionController::class, 'liste']); 
Route::get('/chefmission/delete', [App\Http\Controllers\chefmissionController::class, 'destroy'])->name('chefmissions.destroy');
Route::get('/chefmission/{Id}', [App\Http\Controllers\chefmissionController::class, 'show'])->name('chefmissions.show');
Route::get('/chefmission/edit{Id}', [App\Http\Controllers\chefmissionController::class, 'edit'])->name('chefmissions.edit');
Route::patch('/chefmission/update', [App\Http\Controllers\chefmissionController::class, 'update'])->name('chefmissions.update');

Route::post('/mission', [App\Http\Controllers\chefmissionController::class, 'alldash']);

Route::get('/chefUnite/form', [App\Http\Controllers\chefuniteController::class, 'viewForm'])->name('chefUnites.register');
Route::post('/chefUnite/create', [App\Http\Controllers\chefuniteController::class, 'create'])->name('chefUnites.create');
Route::get('/chefUnite/dashboard', [App\Http\Controllers\chefuniteController::class, 'ayira']); 
Route::get('/chefUnite/liste', [App\Http\Controllers\chefuniteController::class, 'liste']); 
Route::get('/chefUnite/delete', [App\Http\Controllers\chefuniteController::class, 'destroy'])->name('chefUnites.destroy');
Route::get('/chefUnite/{Id}', [App\Http\Controllers\chefuniteController::class, 'show'])->name('chefUnites.show');
Route::get('/chefUnite/edit{Id}', [App\Http\Controllers\chefuniteController::class, 'edit'])->name('chefUnites.edit');
Route::patch('/chefUnite/update', [App\Http\Controllers\chefuniteController::class, 'update'])->name('chefUnites.update');

Route::post('/chefUnite', [App\Http\Controllers\chefuniteController::class, 'alldash']);


Route::get('/mission/form', [App\Http\Controllers\missionController::class, 'viewForm'])->name('missions.register');
Route::post('/mission/create', [App\Http\Controllers\missionController::class, 'create'])->name('missions.create');
Route::get('/mission/dashboard', [App\Http\Controllers\missionController::class, 'ayira']); 
Route::get('/mission/liste', [App\Http\Controllers\missionController::class, 'liste']); 
Route::get('/mission/delete', [App\Http\Controllers\missionController::class, 'destroy'])->name('missions.destroy');
Route::get('/mission/{Id}', [App\Http\Controllers\missionController::class, 'show'])->name('missions.show');
Route::get('/mission/edit{Id}', [App\Http\Controllers\missionController::class, 'edit'])->name('missions.edit');
Route::patch('/mission/update', [App\Http\Controllers\missionController::class, 'update'])->name('missions.update');

Route::post('/mission', [App\Http\Controllers\missionController::class, 'alldash']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
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

Route::get('/',[HomeController::class , 'index']);



Route::get('/eventos/criar',[EventsController::class, 'index'])->middleware('auth');

//CRIAR
Route::post('/events', [EventsController::Class, 'store']);



//DELETAR:
Route::delete('/dashboard/{id}',[EventsController::class, 'destroy']);






//EDITAR
Route::get('/events/edit/{id}', [EventsController::Class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventsController::Class, 'update'])->middleware('auth');



//VIZUALIZAR
Route::get('/events/{id}', [EventsController::Class, 'show'])->middleware('auth');





Route::get('/teste', function () {
    return view('welcome');
});


Route::get('/dashboard',[EventsController::Class, 'dashboard'])->middleware('auth');
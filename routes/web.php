<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class,'index']);
Route::get('/create', [UserController::class,'create']);
Route::post('/create',[UserController::class, 'store']);
Route::get('/users/{id}',[UserController::class, 'show']);
Route::get('/showusers',[UserController::class, 'countUsers']);
Route::get('/findall',[UserController::class, 'findall']);
Route::get('/consulta',[UserController::class, 'consulta']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::put('/update/{id}', [UserController::class, 'update']);
Route::delete('delete/{id}', [UserController::class, 'destroy']);
Route::get('/aniversariantes',[UserController::class, 'aniversariantes']);
Route::any('/search',[UserController::class, 'search']);


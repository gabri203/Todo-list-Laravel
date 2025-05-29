<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;//si importa il namespace del controller
//quando faccio Route::get('/') gli sto dicendo a laravel che sto facendo una richiesta HTTP di tipo get
// il slesh '/' è per il percorso url collegato alla radice del dominio esempio http://localhost/welcome
Route::get('/',[TaskController::class,'index']);
Route::resource('tasks', TaskController::class);

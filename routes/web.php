<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoListController::class, "index"]);

// Vytvoření nové roury která vede na save-item, dostaneme se naní když pošleme data formulářem za pomocí postu,
// (proto post místo get)
// Request na url jde udělat pouze za pomocí postu 
// Druhý argument je pole, ve kterém se nachází classa a metoda na daní classe, která se má zavolat pokud se uskuteční request
Route::post('/', [TodoListController::class, "saveItem"]);
Route::get('/todos', [TodoListController::class, "todos"]);
Route::get("/hotovo", [TodoListController::class, "updateTodo"]);
Route::get("/smazat", [TodoListController::class, "deleteTodo"]);
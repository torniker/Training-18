<?php

use App\Todo;
use Illuminate\Http\Request;

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
    $todos = Todo::all();
    return view('welcome')->with('todos', $todos);
});

Route::post('/todos', function (Request $req) {
    $todo = Todo::create($req->all());
    $todo->save();
    return $todo;
});

Route::post('/todos/{id}', function ($id) {
    $todo = Todo::findOrFail($id);
    $todo->isCompleted = !$todo->isCompleted;
    $todo->save();
    return $todo;
});

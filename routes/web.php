<?php

use App\Http\Controllers\Todo\Todocontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/todo',function(){
  //  return view('todo/app');
//});

Route::get('/todo',[Todocontroller::class, 'index'])->name('todo');
Route::post('/todo',[Todocontroller::class, 'store'])->name('todo.post');
Route::put('/todo/{id}',[Todocontroller::class, 'update'])->name('todo.update');
Route::delete('/todo/{id}',[Todocontroller::class, 'destroy'])->name('todo.delete');
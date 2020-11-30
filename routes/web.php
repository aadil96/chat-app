<?php

use Illuminate\Support\Facades\Route;

Auth::routes();



Route::get('chat', function(){
    return view('chatroom');
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

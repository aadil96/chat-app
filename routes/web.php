<?php

use Illuminate\Support\Facades\Route;
use \App\Providers\MessagePostedEvent;

Auth::routes();

Route::get('chat', function(){
    return view('chatroom');
})->middleware('auth');

Route::get('messages', function(){
	return \App\Models\Message::with('user')->get();
})->middleware('auth');

Route::post('messages', function(){
	$message = \App\Models\Message::create(['user_id' => \Auth::id(), 'body' => request('message')]);
	event(new MessagePostedEvent($message, $message->user));
	return ['status' => 'OK'];
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

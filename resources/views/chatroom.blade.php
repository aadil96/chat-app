@extends('layouts.app')
@section('title')
Chatroom - Index
@endsection
@section('content')
    <div id="app">
        <div class="container mx-auto mt-5">
            <chat-app :messages="messages"></chat-app>

            <chat-input v-on:sent="addMessage"></chat-input>
        </div>
    </div>
@endsection

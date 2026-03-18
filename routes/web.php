<?php

use Illuminate\Support\Facades\Route;

// Quando o usuário acessar seussite.com/minha-tela, o Laravel retornará a view 'tela'
Route::get('/minha-tela', function () {
    return view('tela');
});

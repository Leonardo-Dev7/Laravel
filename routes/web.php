<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Rota raiz chamando o método 'home'
Route::get('/', [SiteController::class, 'home'])->name('site.home');

// Rota /sobre chamando o método 'sobre'
Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');

// Rota /contato chamando o método 'contato'
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
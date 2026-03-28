<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/cad-pacientes', [SiteController::class, 'cadPacientes'])->name('cad-pacientes');
Route::get('/cad-medicos', [SiteController::class, 'cadMedicos'])->name('cad-medicos');
Route::get('/agendamento', [SiteController::class, 'agendamento'])->name('agendamento');
Route::get('/consultas', [SiteController::class, 'consultas'])->name('consultas');

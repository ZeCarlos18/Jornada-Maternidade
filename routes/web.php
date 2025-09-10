<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rota para a página de login
Route::get('/login', function () {
    return view('auth.login');
})->name('login'); 

// Rota para a página de registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register'); 

// Rota da Comunidade
Route::get('/community', [CommunityController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('community');

// Rota do Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rotas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclui as rotas de autenticação do Breeze
require __DIR__.'/auth.php';
<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
ROute::get('/task/new', [TaskController::class, 'create'])->name('task.create');
ROute::get('/task/edit', [TaskController::class, 'create'])->name('task.edit');
ROute::get('/task', [TaskController::class, 'create'])->name('task.view');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


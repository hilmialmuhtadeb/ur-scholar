<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('pages/home/index');
})->name('home');

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});

Route::get('/scholarship', [ScholarshipController::class, 'index'])->name('scholarship.index');
Route::middleware('auth')->prefix('/scholarship')->group(function() {
    Route::post('/', [ScholarshipController::class, 'store'])->name('scholarship.store');
    Route::get('/create', [ScholarshipController::class, 'create'])->name('scholarship.create');
    Route::get('/{scholarship}/edit', [ScholarshipController::class, 'edit'])->name('scholarship.edit');
    Route::patch('/{scholarship}/update', [ScholarshipController::class, 'update'])->name('scholarship.update');
    Route::patch('/{scholarship}/archive', [ScholarshipController::class, 'archive'])->name('scholarship.archive');
    Route::delete('/{scholarship}/delete', [ScholarshipController::class, 'delete'])->name('scholarship.destroy');
});
Route::get('/scholarship/{scholarship}', [ScholarshipController::class, 'show'])->name('scholarship.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/profile/{user}', [UserController::class, 'show'])->name('user.show');
Route::patch('/profile/{user}/update', [UserController::class, 'update'])->name('user.update');
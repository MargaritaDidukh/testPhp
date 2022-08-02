<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('index');

//Route::get('/users', [\App\Http\Controllers\UserController::class, 'getList'])->name('users');
//Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'getUser']);



Route::get('users', [UserController::class, 'index'])->name('users');
Route::put('users/create', [UserController::class, 'store']);
Route::get('users/create', [UserController::class, 'create'])->name('create');
Route::get('users/{id}', [UserController::class, 'show'])->name('showByIdUser');
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('editUser');
Route::put('users/{id}', [UserController::class, 'update'])->name('updateUser');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('destroyUser');

Route::get('/videos', [VideoController::class, 'index'])->name('videos');
Route::put('videos/create', [VideoController::class, 'store']);
Route::get('videos/create', [VideoController::class, 'create'])->name('createVideo');
Route::get('/videos/{id}', [VideoController::class, 'show'])->name('showByIdVideo');
Route::get('videos/{id}/edit', [VideoController::class, 'edit'])->name('editVideo');
Route::put('videos/{id}', [VideoController::class, 'update'])->name('updateVideo');
Route::delete('videos/{id}', [VideoController::class, 'destroy'])->name('destroyVideo');

<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/users', [\App\Http\Controllers\UserController::class, 'getList'])->name('users');
Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'getUser']);
Route::get('/videos', [\App\Http\Controllers\VideoController::class, 'getList'])->name('videos');
Route::get('/videos/{id}', [\App\Http\Controllers\VideoController::class, 'getVideo']);

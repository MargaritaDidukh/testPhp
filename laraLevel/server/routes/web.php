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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/test', [TestController::class, 'show']);
//Route::get('/list', [BookController::class, 'books'])->name('book');
Route::prefix('books')->name('books.')->group(function(){
    Route::get('/', [BookController::class, 'books'])->name('list');
    Route::get('/add', [BookController::class, 'add'])->name('add');
    Route::get('/{id}', [BookController::class, 'view'])->whereNumber('id')->name('view');
});

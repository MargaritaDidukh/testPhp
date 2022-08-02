<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    dd(Auth::guard('admin')->user());
});
Route::get('login', [\App\Http\Controllers\AdminAuthController::class, 'login'])->name('login-page');
Route::post('login', [\App\Http\Controllers\AdminAuthController::class, 'auth'])->name('login');
Route::get('logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])->name('logout');

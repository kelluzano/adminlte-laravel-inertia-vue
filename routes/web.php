<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Auth/Login');
});

Route::get('login', function () {
    return redirect('/');
});
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    });

    Route::group(['prefix' => 'system-settings'], function (){
        Route::get('users', [\App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
    });
});

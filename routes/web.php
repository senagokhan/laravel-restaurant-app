<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;

    Route::get('/', [RestoController::class, 'index']);

    Route::get('/list', [RestoController::class, 'list']);


    Route::get('/add', function () {
        return view('add');
    });

    Route::post('/add', [RestoController::class, 'add'])->name('restaurant.add');

    Route::get('/edit/{id}', [RestoController::class, 'edit'])->name('restaurant.edit');

    Route::put('/edit/{id}', [RestoController::class, 'update'])->name('restaurant.update');

    Route::get('register', function () {
        return view('register');
    })->name('register.form');
    Route::post('register', [RestoController::class, 'register'])->name('register.submit');

    Route::get('login', [RestoController::class, 'loginForm'])->name('login.form');
    Route::post('login', [RestoController::class, 'login'])->name('login.submit');

    Route::get('logout', [RestoController::class, 'logout'])->name('logout');


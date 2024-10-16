<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'showAllUsers'])->name('showAllUsers');

Route::get('/users/create', [UserController::class, 'createTransaction'])->name('createTransaction');

Route::post('/users/store', [UserController::class, 'storeTransaction'])->name('storeTransaction');

Route::get('/users/{id}', [UserController::class, 'viewTransaction'])->name('viewTransaction');

Route::get('/users/{id}/edit', [UserController::class, 'editTransaction'])->name('editTransaction');

Route::put('/users/{id}/update', [UserController::class, 'updateTransaction'])->name('updateTransaction');

Route::delete('/users/{id}/delete', [UserController::class, 'deleteTransaction'])->name('deleteTransaction');

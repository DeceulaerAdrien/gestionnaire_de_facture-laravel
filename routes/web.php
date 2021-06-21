<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.welcome');
});

Route::get('/clients', [ClientsController::class, 'index'])->name('clients.get');

Route::get('/clients/{id}', [ClientsController::class, 'show'])->name('clients.show');

Route::get('/clients/edit/{id}', [ClientsController::class, 'edit'])->name('clients.edit');

Route::patch('/clients/edit/{id}', [ClientsController::class, 'update'])->name('clients.update');

Route::get('/clients/delete/{id}', [ClientsController::class, 'showDestroy'])->name('clients.showdestroy');

Route::delete('/clients/delete/{id}', [ClientsController::class, 'destroy'])->name('clients.destroy');

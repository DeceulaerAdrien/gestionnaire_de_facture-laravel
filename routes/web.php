<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.welcome');
});

Route::get('/clients', [ClientsController::class, 'index']);

Route::get('/clients/{id}', [ClientsController::class, 'show']);

Route::get('/clients/edit/{id}', [ClientsController::class, 'edit']);

Route::patch('/clients/edit/{id}', [ClientsController::class, 'update']);

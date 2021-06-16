<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.welcome');
});

Route::get('/clients', [ClientsController::class, 'index']);

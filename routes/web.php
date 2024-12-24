<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/process', [ClientController::class, 'handleService']);

Route::get('/', function () {
    return view('welcome');
});

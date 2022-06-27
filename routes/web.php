<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Display this route when the setup has not completed yet.
Route::get(
    '/setup',
    [App\Http\Controllers\SetupController::class, 'index']
)->name('setup');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

use App\Http\Controllers\ContactController;

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

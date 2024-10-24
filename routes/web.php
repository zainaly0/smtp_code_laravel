<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-mail', [MailController::class, 'sendEmail']);
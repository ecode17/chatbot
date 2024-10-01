<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;

Route::get('/', function () {
    return view('index');
});

Route::get('/chatbot', [AIController::class, 'showForm']);
Route::post('/chatbot', [AIController::class, 'processInput']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

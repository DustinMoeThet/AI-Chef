<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;

Route::get('/', function () {
    return view('index');
});

Route::post('/ask', [AIController::class, 'ask']);

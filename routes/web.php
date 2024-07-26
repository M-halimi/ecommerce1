<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\ProductComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class]);




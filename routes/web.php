<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\ProductComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class,'index']);

Route::get('addnewproduct/create',[ProductController::class, 'create']);
Route::post('addnewproduct',[ProductController::class, 'store']);




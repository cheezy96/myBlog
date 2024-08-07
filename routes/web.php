<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ImageUploadController;

Route::get('image-form', [ImageUploadController::class, 'index']);
Route::post('upload', [ImageUploadController::class, 'upload']);
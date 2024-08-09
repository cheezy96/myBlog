<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ImageUploadController;

Route::get('image-form', [ImageUploadController::class, 'index']);
Route::get('vue', [ImageUploadController::class, 'vuet']);
Route::post('upload', [ImageUploadController::class, 'upload']);

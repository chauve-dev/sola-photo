<?php

use App\Http\Controllers\CoordinatesController;
use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
   Route::apiResource('coordinates', CoordinatesController::class);
   Route::apiResource('pictures', PictureController::class, ['only' => ['index', 'store', 'show', 'destroy']]);
});

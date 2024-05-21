<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/customers');
});

Route::resource('/customers', CustomerController::class);
// Route::resource('/news', NewsController::class);

Route::get('/news/teknologi', [NewsController::class, 'teknologi']);
Route::get('/news/ekonomi', [NewsController::class, 'ekonomi']);
Route::get('/news/internasional', [NewsController::class, 'internasional']);
Route::get('/news/olahraga', [NewsController::class, 'olahraga']);
Route::get('/news/hiburan', [NewsController::class, 'hiburan']);

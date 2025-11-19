<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('index'); 
    }); 
    Route::get('/category', function () { 
        return view('category'); 
        }); 
    Route::get('/galery', function () { 
        return view('galery'); 
        }); 
    Route::get('/halo', function () { 
    return 'Halo laravel!'; 
    });
use App\Http\Controllers\TugasController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list-tugas', [TugasController::class, 'index']);

use App\Http\Controllers\WarkopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [WarkopController::class, 'index']);
Route::get('/category', [WarkopController::class, 'category']);
Route::get('/galery', [WarkopController::class, 'galery']);

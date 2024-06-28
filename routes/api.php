<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Авторизация
Route::post('/login' , [AuthController::class, 'login' ]);
//Регистрация
Route::post('/register' , [AuthController::class, 'register' ]);


Route::middleware('auth:api')->group(function () {
    //Выход
    Route::get('/logout', [AuthController::class, 'logout']);
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FightController;
use App\Http\Controllers\BossController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Авторизация
Route::post('/login' , [AuthController::class, 'login' ]);
//Регистрация
Route::post('/register' , [AuthController::class, 'register' ]);
Route::middleware('auth:api')->group(function () {
    //Выход
    Route::get('/logout', [AuthController::class, 'logout']);
    //Просмотр боссов
    Route::get('/bosses', [BossController::class, 'index' ]);
    // Добавление файта и просмотр босса
    Route::post('/boss/{id}', [FightController::class, 'addedit']);
});

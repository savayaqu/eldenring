<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Метод регистрации
    public function register(RegisterRequest $request) {
        $user = new User($request->all());
        $user->save();
        return response()->json(['message' => 'Вы зарегистрировались']);
    }
    //Метод авторизации
    public function login(LoginRequest $request) {
        $user = User
            ::where('login',    $request->login)
            ->where('password', $request->password)
            ->first();

        if (!$user) throw new ApiException(401, 'Ошибка аутентификации');

        $newToken = Hash::make(microtime(true) * 1000);

        $user->token = $newToken;
        $user->save();

        return response()->json([
            'data' => [
                'api_token' => $user->token,
            ],
        ]);
    }
    //Метод выхода из аккаунта
    public function logout(Request $request) {
        $user = $request->user();
        if (!$user) throw new ApiException(401, 'Ошибка аутентификации');
        $user->token = null;
        $user->save();
        return response([
            'data' => [
                'message' => 'Вы успешно вышли из системы',
            ],
        ]);
    }
}

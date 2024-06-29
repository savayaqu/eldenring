<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Метод регистрации
    public function register(RegisterRequest $request) {
        $user = new User($request->all());
        $role = Role::where('name', 'user')->first();
        $user->role_id = $role->id;
        $user->save();
        return response()->json(['message' => 'Вы зарегистрировались']);
    }
    //Метод авторизации
    public function login(LoginRequest $request) {
        $user = User
            ::where('nickname',    $request->nickname)
            ->where('password', $request->password)
            ->first();

        if (!$user) throw new ApiException(401, 'Ошибка аутентификации');

        $newToken = Hash::make(microtime(true) * 1000);

        $user->api_token = $newToken;
        $user->save();

        return response()->json([
            'data' => [
                'api_token' => $user->api_token,
            ],
        ]);
    }
    //Метод выхода из аккаунта
    public function logout() {
        $user = Auth::user();
        if (!$user) throw new ApiException(401, 'Ошибка аутентификации');
        $user->api_token = null;
        $user->save();
        return response([
            'data' => [
                'message' => 'Вы успешно вышли из системы',
            ],
        ]);
    }
}

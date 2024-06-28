<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
            'nickname' => 'required|string|max:64|unique:users',
            'password' => 'required|string|max:128',
        ];
    }
}

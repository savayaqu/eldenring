<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
            'nickname' => 'required|string|max:64',
            'password' => 'required|string|max:128'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFightRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
            'status' => ' integer|between:0,1',
            'attempts' => ' integer|between:0,10000',
        ];
    }
}

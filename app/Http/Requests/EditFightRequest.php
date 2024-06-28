<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditFightRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'status' => 'integer|between:0,1',
            'attempts' => 'integer|between:1,10000',
        ];
    }
}

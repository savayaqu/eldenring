<?php

namespace App\Http\Middleware;

use App\Exceptions\ApiException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            Throw new ApiException(401, 'Unauthorized');
        }
    }
}

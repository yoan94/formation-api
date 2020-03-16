<?php

namespace App\Http\Middleware;

use App\Http\Controllers\ApiController;
use Closure;

class AuthorizationMiddleware {

    public function handle($request, Closure $next) {

        if($request->header("Authorization") == env("APP_AUTHORIZATION", "??????????")) {
            return $next($request);
        }

        return ApiController::return403();
    }

}
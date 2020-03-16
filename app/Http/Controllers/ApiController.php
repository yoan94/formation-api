<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller {
    public static function return404(?string $msg = null) {
        return response([
            "error" => true,
            "code" => 404,
            "message" => $msg
        ], 404);
    }

    public static function return403(?string $msg = null) {
        return response([
            "error" => true,
            "code" => 403,
            "message" => $msg
        ], 403);
    }
}

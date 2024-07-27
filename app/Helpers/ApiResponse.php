<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public static function success($data = [], $message = null, $code = 200): JsonResponse
    {
        return response()->json($data, $code);
    }

    public static function error($message, $status = 400): JsonResponse
    {
        return response()->json($message, $status);
    }

    public static function notFound($id): JsonResponse
    {
        return response()->json("Entry with id = $id was not found.", 404);
    }

    public static function response($status, $code, $message, $data = []): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    public static function validationError($validator): JsonResponse
    {
        return response()->json([
            "status" => "fail",
            "errors" => $validator->errors()
        ], 422);
    }
}

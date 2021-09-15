<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

/**
 * 
 */
trait ApiHelpers
{
    protected function onSuccess($data, string $message = '', int $code = 200): JsonResponse
    {
        return response()->json([
            "status" => $code,
            "message" => $message,
            "data" => $data
        ], $code);
    }

    public function onError(int $code, string $message = ''): JsonResponse
    {
        return response()->json([
            "status" => $code,
            "message" => $message
        ]);
    }
}

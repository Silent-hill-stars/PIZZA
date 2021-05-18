<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @var array
     */
    protected array $headers = [];

    /**
     * @param int $status
     * @return JsonResponse
     */
    public function response(int $status = 200): JsonResponse
    {
        return response()->json($this->data, $status, $this->headers);
    }
}

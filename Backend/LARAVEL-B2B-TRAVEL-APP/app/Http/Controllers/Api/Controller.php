<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *    title="Laravel B2B Travel Application Documentations",
 *    description="An API of cool stuffs",
 *    version="1.0.0",
 *      @OA\Contact(
 *         name="Quickasava",
 *         email="johnckaris@gmail.com",
 *          url="https://travel_app"
 *     ),
 * )

 * @OA\Server(
 *     description="Local server",
 *     url="http://127.0.0.1:8000"
 * ),
 *  @OA\Server(
 *     description="Staging server",
 *     url="http://test.quicksava.com/quicksava_test_api"
 * ),
 * @OA\Server(
 *     description="Production server",
 *     url="https://api.example.com"
 * ),
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

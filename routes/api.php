<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController as ApiOrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Order API Routes
Route::prefix('orders')->middleware('auth:sanctum')->group(function () {
    Route::post('/', [ApiOrderController::class, 'store']);
    Route::get('/', [ApiOrderController::class, 'index']);
    Route::get('/{id}', [ApiOrderController::class, 'show']);
});

// Admin Order API Routes
Route::prefix('admin/orders')->middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/', [ApiOrderController::class, 'adminIndex']);
    Route::put('/{id}', [ApiOrderController::class, 'updateStatus']);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/v1/users/login', [\App\Http\Controllers\Api\Auth\AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::post('/leads', [\App\Http\Controllers\Api\Lead\LeadController::class, 'store']);
    Route::get('/leads/{lead}/status', [\App\Http\Controllers\Api\Lead\LeadController::class, 'leadStatus']);
    Route::post('/leads/{lead}/report-conversion', [\App\Http\Controllers\Api\Lead\LeadController::class, 'reportConversion']);
    Route::post('/crm/autologin', [\App\Http\Controllers\Api\Crm\CrmController::class, 'autologin']);
});

<?php

use App\Http\Controllers\v1\Auth\AuthController;
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

Route::get('/', function () {
    return [
        'app' => 'JIMMart API by kopkarJIM',
        'version' => '1.0.0',
    ];
});

Route::prefix('/v1')->group(function () {

    Route::group(['namespace' => 'Auth'], function () {

        Route::post('auth/login', [AuthController::class, 'login']);
    });
});

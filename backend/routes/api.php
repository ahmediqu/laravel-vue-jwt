<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Api\AuthController;


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


Route::post('/login', [AuthController::class, 'login'])
        ->name('auth.login');

Route::group(['middleware' => 'auth:api'], function () {


    Route::post('/admin', [AuthController::class, 'admin'])
        ->name('auth.admin');

    Route::post('/check-token', [AuthController::class, 'checkToken'])
        ->name('auth.token');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('auth.logout');


});

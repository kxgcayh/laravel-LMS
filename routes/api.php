<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ClassController;
use App\Http\Controllers\API\CalendarController;
use App\Http\Controllers\API\TaskController;

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

Route::group(['middleware' => ['auth:api'], 'as' => 'api.'], function () {
    // Authentication
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    // Proccess
    Route::resource('calendars', CalendarController::class)->except('create');
    Route::resource('tasks', TaskController::class)->except('create');
    Route::resource('classes', ClassController::class)->except('create');
});

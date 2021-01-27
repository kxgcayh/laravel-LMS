<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Classroom\ClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
    Route::get('/classes', [PagesController::class, 'classes'])->name('classes');

    Route::group(['prefix' => 'calendars', 'as' => 'calendars.'], function () {
        Route::get('/', [CalendarController::class, 'index'])->name('index');
        Route::post('/create', [CalendarController::class, 'store'])->name('store');
        Route::post('/update', [CalendarController::class, 'update'])->name('update');
        Route::post('/delete', [CalendarController::class, 'destroy'])->name('destroy');
    });

    Route::get('/myClass', [ClassController::class, 'getMyClass'])->name('data.class');

    Route::post('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
});

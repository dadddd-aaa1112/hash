<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::post('/', [\App\Http\Controllers\TaskController::class, 'store'])->name('task.store');

Route::group(['prefix' => 'group'], function () {
    Route::get('/', [\App\Http\Controllers\TaskController::class, 'redirectToGroup'])->name('group.redirect');
    Route::post('/', [\App\Http\Controllers\TaskController::class, 'storeGroup'])->name('task.group.store');
});

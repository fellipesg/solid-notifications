<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LogController;
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

Route::get('/message', function () {
    $categories = ['Sports', 'Finance', 'Movies'];
    return view('notifications.submit')->with('categories', $categories);
});
Route::post('submit-message',  [MessageController::class, 'submitMessage']);
Route::get('logs', [LogController::class, 'index']);

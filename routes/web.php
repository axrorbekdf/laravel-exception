<?php

use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\Test2Controller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index']);
Route::get('/test/lesson1', [Test1Controller::class, '__invoke']);
Route::get('/test/lesson2', [Test2Controller::class, '__invoke']);

<?php

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
use App\Http\Controllers\YourController;

Route::post('/posts', [PostController::class, 'create']);
Route::post('/posts', [YourController::class, 'read']);
Route::post('/posts', [YourController::class, 'update']);
Route::post('/posts', [YourController::class, 'delete']);
Route::post('/posts', [YourController::class, 'getAllRecords']);

Route::get('/', function () {
    return view('welcome');
});

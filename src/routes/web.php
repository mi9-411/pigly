<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeightTargetController;
use App\Http\Controllers\WeightLogController;
use App\Models\WeightLog;

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


Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [WeightLogController::class, 'index']);
});

//Route::post('/register', [UserController::class, 'store']);
//Route::post('/login', [WeightLogController::class, 'store']);
//Route::post('/logout', [WeightLogController::class, 'destroy']);
Route::get('/register/step2', [UserController::class, 'register']);
Route::post('/weight_logs', [WeightTargetController::class, 'create']);

Route::get('/weight_logs/goal_setting', [WeightLogController::class, 'goal']);
Route::get('/weight_logs/search', [WeightLogController::class, 'search']);
Route::get('/weight_logs/{:weightLogId}', [WeightLogController::class, 'detail']);
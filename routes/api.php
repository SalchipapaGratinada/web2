<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/mensaje', [ExampleController::class, 'mensaje']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'create']);



Route::post('/mensaje', function () {
    $arr = array(1,2,3);
    return json_encode($arr);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

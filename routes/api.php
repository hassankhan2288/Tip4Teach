<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\TransactionController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductController;

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

/** mobile api **/
Route::post('login', [LoginController::class, 'login']);
Route::post('signup', [LoginController::class, 'signup']);

Route::group(['middleware' => 'auth:sanctum'], function () {
});
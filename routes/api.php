<?php

use App\Http\Controllers\CommentController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Products
Route::post('products/register', [ProductController::class, 'store']);  // add new product
Route::get('products', [ProductController::class, 'index']);  // show all products
Route::get('products/{product_id}/', [ProductController::class, 'show']);

//Users
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('users', [UserController::class, 'index']);
Route::get('users/{user_id}', [UserController::class, 'show']);

// Comments
Route::post('products/{product_id}/comments', [CommentController::class, 'store']);

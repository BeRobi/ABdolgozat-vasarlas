<?php

use App\Http\Controllers\Product_typeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product_types', [Product_typeController::class, 'index']);
Route::get('product_types/{id}', [Product_typeController::class, 'show']);
Route::post('product_types', [Product_typeController::class, 'store']);
Route::put('product_types/{id}', [Product_typeController::class, 'update']);

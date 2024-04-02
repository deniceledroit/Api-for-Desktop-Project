<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('products',[ProductController::class,'index']);
    Route::get('product/{id}',[ProductController::class,'show']);
    Route::put('product/{id}',[ProductController::class,'update']);
    Route::post('product',[ProductController::class,'store']);
    Route::delete('product/{id}',[ProductController::class,'destroy']);
    Route::get('suppliers',[SupplierController::class,'index']);
    Route::get('supplier/{id}',[SupplierController::class,'show']);
});

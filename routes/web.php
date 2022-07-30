<?php

use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/orders',[OrderController::class, 'index']);
Route::get('/orders/create',[OrderController::class, 'create']);
Route::post('/orders/create',[OrderController::class, 'store']);
Route::get('/orders/{id}/edit',[OrderController::class, 'edit']);
Route::get('/orders/{id}',[OrderController::class, 'show']);



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidtransController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MidtransController::class, 'index']);
Route::get('/parameter-pay', [MidtransController::class, 'parameterPay']);
Route::get('/callback-js', [MidtransController::class, 'callbackJs']);
Route::post('/callback-js-post', [MidtransController::class, 'callbackJsPost']);
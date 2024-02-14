<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ErpController;
use App\Http\Controllers\RegisterController;
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
//     return view('auth.login-view');
// });

Route::get('/', [ErpController::class, 'index']);

// Route::get('/register', [RegisterController::class, 'index']);

// Route::resource('login', ErpController::class);
Route::get('login', [ErpController::class, 'index'])->name('login');
Route::post('login', [ErpController::class, 'login_action'])->name('login.action');

Route::resource('register', RegisterController::class);
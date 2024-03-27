<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;


use App\Http\Controllers\CustomerController;


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

Route::get('/', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register', [UserController::class,'register']); 
Route::post('/login', [UserController::class,'login']); 
Route::post('/logout', [UserController::class,'logout']); 

Route::resource("/customer", CustomerController::class);










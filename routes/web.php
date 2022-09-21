<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
use App\Http\Controllers\customerController;
use Illuminate\Support\Facades\Http;


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
    return view('/welcome');
});

Auth::routes();
//dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//customers list routes
Route::get('/customers', [customerController::class, 'index']);
Route::get('/customers/create', [customerController::class, 'create']);
Route::post('/customers', [customerController::class, 'store']);
Route::get('/customers/{id}', [customerController::class, 'show']);
Route::get('/customers/{id}/edit', [customerController::class, 'edit']);
Route::put('/customers/{id}', [customerController::class, 'update']);
Route::delete('/customers/{id}', [customerController::class, 'destroy']);


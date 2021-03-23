<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
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
    return response()->json(['message' => 'Gastrovita API', 'status' => 'Connected']);;
});

Route::post('/login', UserController::class.'@login');
Route::post('/users/register', UserController::class.'@store');
//Não é preciso estar autenticado para registrar um usuário

Route::group(['middleware' => ['auth:sanctum']], function() {
    //Route::resource('/users', UserController::class);
    Route::prefix('/users')->name('users.')->group(function() {
        Route::get('/', UserController::class.'@index')->name('index');
        Route::patch('/', UserController::class.'@update')->name('update');
        Route::delete('/', UserController::class.'@destroy')->name('destroy');
    });

    Route::prefix('/customers')->name('customers.')->group(function() {
        Route::get('/', CustomerController::class.'@index')->name('index');
        Route::get('/{id}', CustomerController::class.'@show')->name('show');
        Route::post('/', CustomerController::class.'@store')->name('store');
        Route::patch('/{id}', CustomerController::class.'@update')->name('update');
        Route::delete('/{id}', CustomerController::class.'@destroy')->name('destroy');
    });

    //Route::resource('/customers', CustomerController::class);
    Route::post('/logout', UserController::class.'@logout');
});
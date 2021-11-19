<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return "hello world";
});

Route::prefix('user') -> group(function(){
    Route::get('test1', function(){
        return "hello test1";
    });
    Route::get('test2', 'App\Http\Controllers\UserController@test2');
    Route::get('test3', 'App\Http\Controllers\UserController@test3');
    Route::get('test4', 'App\Http\Controllers\UserController@test4');
    Route::get('add', 'App\Http\Controllers\UserController@add');
    Route::get('del', 'App\Http\Controllers\UserController@del');
    Route::get('update', 'App\Http\Controllers\UserController@update');
    Route::get('select', 'App\Http\Controllers\UserController@select');
});
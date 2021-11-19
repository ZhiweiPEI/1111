<?php

namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\listeMediasController;
    use App\Http\Controllers\CategoryController;


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
        Route::post('add', 'App\Http\Controllers\UserController@add');
        Route::get('del', 'App\Http\Controllers\UserController@del');
        Route::get('update', 'App\Http\Controllers\UserController@update');
        Route::get('select', 'App\Http\Controllers\UserController@select');
    });

    Route::prefix('film') -> group(function(){
        Route::get('add', 'App\Http\Controllers\FilmController@add');
        Route::get('del', 'App\Http\Controllers\FilmController@del');
        Route::get('update', 'App\Http\Controllers\FilmController@update');
        Route::get('select', 'App\Http\Controllers\FilmController@select');
    });

    Route::prefix('category') -> group(function(){
        Route::get('add', 'App\Http\Controllers\CategoryController@add');
        Route::get('del', 'App\Http\Controllers\CategoryController@del');
        Route::get('update', 'App\Http\Controllers\CategoryController@update');
        Route::get('select', 'App\Http\Controllers\CategoryController@select');
    });
        
    //两个参数
    Route::get('user/{nom}/{prenom}', function ($nom,$prenom) {
        return 'prenom: '.$prenom . '  nom: '. $nom;
    });
    //正则表达式
    Route::get('title/{slug}', function ($slug) {
        return $slug;
    })->where(['slug' => '[A-Za-z]+']);
    //重定向
    Route::get('/listeFilms',function(){
        return 'Liste de Films';
    });

    Route::get('/test', function () {
        return view('test');
    })->name('teest');

    //demo controller
    Route::get('/listeMedias', 'App\Http\controllers\listeMediasController@getListeMedias');

    Route::get('/listeMediasWithElements/{type}/{annee}', 'App\Http\controllers\listeMediasController@getListeMediasWithElements');
?>
<?php

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

Route::get('/', function () {
    return "hello";
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


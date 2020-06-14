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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Auth::routes();*/

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/', 'PpdbController@index');

Route::get('/ppdb_smawa_2020', 'PpdbController@register')->name('ppdb_smawa_2020');

Route::post('/postregister', 'PpdbController@postregister')->name('postregister');

Route::get('/sukses', 'PpdbController@sukses');

Route::get('/login', 'AuthController@login')->name('login');

Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');

Route::post('/postuser', 'AuthController@postuser')->name('postuser');

Route::get('/logout', 'AuthController@logout');

Route::get('/formcek', 'PpdbController@formcek')->name('formcek');

Route::get('/postcek', 'PpdbController@postcek')->name('postcek');

Route::get('/register', 'AuthController@register')->name('register');

Route::middleware(['AuthSentinel'])->group(function(){
    Route::get('/dasbor', 'PanelController@dasbor')->name('dasbor');
    Route::get('/export', 'PanelController@export')->name('export');
    Route::get('getdatapd', 'DataPDController@getdatapd')->name('getdatapd');
    Route::get('datapd', 'DataPDController@indexpd')->name('datapd');
    Route::get('/edit/{id}', 'PanelController@edit')->name('edit');
    Route::post('/updatepd/{id}', 'PpdbController@updatepd')->name('updatepd');
    Route::get('/show/{id}', 'PpdbController@show')->name('show');
});



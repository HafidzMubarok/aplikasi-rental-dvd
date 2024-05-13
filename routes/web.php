<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::prefix('dvd')->group(function () {
		Route::get('/index', ['as'=> 'dvd.index','uses'=> 'App\Http\Controllers\DvdController@index']);
		Route::get('/create', ['as'=> 'dvd.create','uses'=> 'App\Http\Controllers\DvdController@create']);
		Route::post('/store', ['as'=> 'dvd.store','uses'=> 'App\Http\Controllers\DvdController@store']);
	});
	Route::prefix('peminjaman')->group(function () {
		Route::get('/index', ['as'=> 'peminjaman.index','uses'=> 'App\Http\Controllers\PeminjamanDvdController@index']);
		Route::get('/create', ['as'=> 'peminjaman.create','uses'=> 'App\Http\Controllers\PeminjamanDvdController@create']);
		Route::post('/store', ['as'=> 'peminjaman.store','uses'=> 'App\Http\Controllers\PeminjamanDvdController@store']);
	});
});


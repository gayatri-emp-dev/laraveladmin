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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
	Route::get('/user/add', 'App\Http\Controllers\UserController@create');
	Route::post('/user/add', 'App\Http\Controllers\UserController@store')->name('user.store');
	Route::get('/user/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
	Route::post('/user/update', 'App\Http\Controllers\UserController@update')->name('user.update');
	Route::get('/user/delete/{id}', 'App\Http\Controllers\UserController@delete')->name('user.delete');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('/vehicle', 'App\Http\Controllers\VehicleController@index')->name('vehicle');
	Route::get('/vehicle/add', 'App\Http\Controllers\VehicleController@create');
	Route::post('/vehicle/add', 'App\Http\Controllers\VehicleController@store')->name('vehicle.store');
	Route::get('/vehicle/edit/{id}', 'App\Http\Controllers\VehicleController@edit')->name('vehicle.edit');
	Route::post('/vehicle/update', 'App\Http\Controllers\VehicleController@update')->name('vehicle.update');
	Route::get('/vehicle/view/{id}', 'App\Http\Controllers\VehicleController@view')->name('vehicle.view');
	Route::get('/vehicle/delete/{id}', 'App\Http\Controllers\VehicleController@delete')->name('vehicle.delete');

	Route::get('/vehicle-file-import', 'App\Http\Controllers\VehicleController@fileImportExport');
	Route::post('/file-import', 'App\Http\Controllers\VehicleController@fileImport')->name('file-import');
	Route::get('/file-export', 'App\Http\Controllers\VehicleController@fileExport')->name('file-export');
});


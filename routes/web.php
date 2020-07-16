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
    return view('welcome');

});

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/dashboard', function () {
    return view('admin.dashboard');});

    Route::get('/tasks', function () {
    return view('admin.tasks');});

    Route::get('/users', 'Admin\DashboardController@registered');


    Route::get('/edit-role/{id}', 'Admin\DashboardController@edit');
    Route::put('/edited/{id}', 'Admin\DashboardController@update');
    Route::delete('/delete/{id}', 'Admin\DashboardController@delete');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



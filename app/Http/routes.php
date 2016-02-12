<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);


// Routes in this group must be authenticated
Route::group(['middleware' => 'authenticate'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::resource('users', 'UsersController', ['except' => 'destroy']);
    Route::get( 'users/{userId}/enable',        ['as' => 'users.enable',         'uses' => 'UsersController@enable']);
    Route::get( 'users/{userId}/disable',       ['as' => 'users.disable',        'uses' => 'UsersController@disable']);

    Route::get('company', ['as' => 'company.show',  'uses' => 'CompanyController@show']);

});

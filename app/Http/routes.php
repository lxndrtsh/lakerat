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

Route::get('/', 'WelcomeController@index');
Route::get('/menu', 'WelcomeController@menu');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/home', function() {
    return redirect('admin/dashboard');
});

Route::group(['prefix'=>'admin'], function()
{
    Route::get('/dashboard', 'Admin\AdminController@dashboard');
    Route::get('/data/views', 'Admin\AdminController@__getViewData');
    Route::get('/data/browsers', 'Admin\AdminController@__getBrowserData');

    Route::post('/content', 'Admin\ContentController@update');
    Route::get('/content/{alias}', 'Admin\ContentController@show');
});

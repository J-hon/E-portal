<?php

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

Route::group(['middleware' => ['web']], function() {

    // Authentication Routes...
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::get('/', 'PagesController@getIndex');
    Route::get('contact', 'PagesController@getContact');
    Route::get('about', 'PagesController@getAbout');
    Route::get('educate', 'PagesController@getEducate');

    // Educate Routes...
//    Route::get('educate/personal', ['uses' => 'PersonalController@index', 'as' => 'personal.index']);
//    Route::post('educate/personal', ['uses' => 'PersonalController@store', 'as' => 'personal.store']);
    Route::resource('personal', 'PersonalController');
    Route::get('/getLG', 'PersonalController@getLG');
    Route::get('/getDept', 'PersonalController@getDept');

});
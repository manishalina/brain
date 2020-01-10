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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/ulogin', 'HomeController@login')->name('user-login');
Route::post('/ulogin', 'HomeController@login')->name('user-login');
Route::get('/uregister', 'HomeController@register')->name('user-register');
Route::get('/verify/{key}', 'StudentController@verify');
Route::get('/interest/{key}', 'StudentController@interest');
Route::post('/saveinterest', 'StudentController@saveinterest');
Route::post('/saveabilities', 'StudentController@saveabilities');
Route::get('/abilities/{key}', 'StudentController@abilities');

Route::get('/profile', 'DashboardController@user_dashboard');

Route::resource('/dashboard', 'DashboardController');
Route::resource('/blog', 'BlogController');
Route::resource('/student', 'StudentController');

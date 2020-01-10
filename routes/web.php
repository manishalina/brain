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

// Route::get('/', function () {

//     return view('home');
// });

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/grade-eight', 'HomeController@gradeeight')->name('grade-eight');
Route::get('/grade-ninth', 'HomeController@gradeninth')->name('grade-ninth');
Route::get('/grade-eleven', 'HomeController@gradeeleven')->name('grade-eleven');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/programhighlights', 'HomeController@programhighlights')->name('programhighlights');
Route::get('/programfeatures', 'HomeController@programfeatures')->name('programfeatures');
Route::get('/ulogin', 'HomeController@login')->name('user-login');
Route::post('/ulogin', 'HomeController@login')->name('user-login');
Route::get('/uregister', 'HomeController@register')->name('user-register');
Route::get('/verify/{key}', 'StudentController@verify');
Route::get('/interest/{key}', 'StudentController@interest');
Route::post('/saveinterest', 'StudentController@saveinterest');
Route::post('/saveabilities', 'StudentController@saveabilities');
Route::get('/abilities/{key}', 'StudentController@abilities');
Route::get('/blogs', 'HomeController@blog')->name('blogs');
Route::get('/privacy-policy', 'HomeController@privacypolicy')->name('privacy-policy');
Route::get('/terms-and-conditions', 'HomeController@termsconditions')->name('terms-and-conditions');
Route::get('/disclaimer', 'HomeController@disclaimer')->name('disclaimer');
Route::get('/profile', 'DashboardController@user_dashboard');
Route::resource('/dashboard', 'DashboardController');
Route::resource('/blog', 'BlogController');
Route::resource('/student', 'StudentController');

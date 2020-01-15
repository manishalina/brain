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
Route::get('/faqs', 'HomeController@faq')->name('faqs');
Route::get('/catlogs', 'HomeController@catlog')->name('catlogs');
Route::get('/programhighlights', 'HomeController@programhighlights')->name('programhighlights');
Route::get('/programfeatures', 'HomeController@programfeatures')->name('programfeatures');
Route::get('/ulogin', 'HomeController@login')->name('user-login');
Route::post('/ulogin', 'HomeController@login')->name('user-login');
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');
Route::get('/uregister', 'HomeController@register')->name('user-register');
Route::get('/verify/{key}', 'StudentController@verify');
Route::get('/interest/{key}', 'StudentController@interest');
Route::post('/saveinterest', 'StudentController@saveinterest');
Route::post('/saveabilities', 'StudentController@saveabilities');
Route::get('/abilities/{key}', 'StudentController@abilities');
Route::get('/career/{key}', 'StudentController@career');
Route::get('/subject/{key}', 'StudentController@subject');
Route::get('/feedback/{key}', 'StudentController@feedback');
Route::post('/savefeedback', 'StudentController@savefeedback');
Route::post('/savecomment', 'HomeController@savecomment');
Route::get('/traits/{key}', 'StudentController@traits');
Route::post('/savetraits', 'StudentController@savetraits');
Route::post('/savesubject', 'StudentController@savesubject');
Route::post('/savecareer', 'StudentController@savecareer');
Route::get('/blogs', 'HomeController@blog')->name('blogs');
Route::get('/privacy-policy', 'HomeController@privacypolicy')->name('privacy-policy');
Route::get('/terms-and-conditions', 'HomeController@termsconditions')->name('terms-and-conditions');
Route::get('/disclaimer', 'HomeController@disclaimer')->name('disclaimer');
Route::get('/profile', 'DashboardController@user_dashboard');
Route::post('/studentupdate', 'DashboardController@studentupdate');
Route::resource('/dashboard', 'DashboardController');
Route::resource('/feedback', 'CommentController');
Route::get('/approvefeedback/{key}', 'CommentController@approvefeedback');
Route::get('/deletefeedback/{key}', 'CommentController@deletefeedback');
Route::resource('/blog', 'BlogController');
Route::resource('/student', 'StudentController');
Route::resource('/faq', 'FaqController');
Route::resource('/catlog', 'CatlogController');
Route::resource('/news', 'NewseventController');
Route::get('/newsdetail/{key}', 'HomeController@eventdetail');
Route::get('/blogs/{blog}', 'HomeController@blogdetail');
Route::get('/catlogs/{catlog}', 'HomeController@catlogdetail');
Route::get('/subscribelist', 'DashboardController@subscribelist');
Route::get('/requestlist', 'DashboardController@requestlist');
Route::get('/contactlist', 'DashboardController@contactlist');



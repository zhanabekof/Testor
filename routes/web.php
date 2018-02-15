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
    return view('welcome');
});
Route::get('/forgot', function () {
    return view('forgotPassword');
});
Route::get('contacts', function () {
  return view('contacts');
});
Route::get('about', function () {
  return view('about');
});
Route::get('homepage', function () {
  return view('homepage');
});

Route::group(['middleware' => 'auth'], function () {
  Route::get('/logout', function () {
      Auth::logout();
  });
  Route::get('student/cabinet', function () {
    return view('student.cabinet');
  });
  Route::get('student/subjects','StudentController@getSubjects');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

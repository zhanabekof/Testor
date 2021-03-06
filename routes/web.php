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
  Route::get('/student/cabinet','StudentController@getCabinet');
  Route::get('/student/test','StudentController@getTest');
  Route::get('/teacher/create','TeacherController@getCreate');
  Route::get('/teacher/questions','TeacherController@getQuestions');
  Route::post('/teacher/create','TeacherController@postCreate');
  Route::post('/student/test/testComplete','StudentController@postTestComplete');
  Route::get('/teacher/getquestion','TeacherController@getQuestion');
  Route::get('/student/subjects','StudentController@getSubjects');
  
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

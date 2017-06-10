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


//Route::get('/create', function () {
  //  return view('create');

Route::get('/users','UserController@index');
Route::get('/user/create','UserController@index');



//Route::post('/create','UserController@store');

//Route::get('/profiles','ProfileController@index');  // all users
//Route::get('/profile/{:id}','ProfileController@get'); // get user

//Route::get('/profile/create','ProfileController@create'); // create
//Route::post('/profile/store','ProfileController@store'); // create

//Route::post('/profile/delete','ProfileController@delete'); //delete profile
//Route::post('/profile/update','ProfileController@update');


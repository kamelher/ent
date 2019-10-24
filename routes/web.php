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

Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', 'HomeController@index');
    Route::resource('faculties', 'FacultyController');
}

);




Route::resource('departements', 'DepartementController');

































Route::resource('users', 'UserController');













Route::resource('interstings', 'InterstingController');





Route::resource('adresses', 'AdressController');







Route::resource('formations', 'FormationController');
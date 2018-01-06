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
/*
--------------------------------------------------------------------------
Auth::routes()
--------------------------------------------------------------------------
	php artisan make:auth was used to create inbuilt login register and logout functonality of laravel
	login page is edited
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout'); //Just added to fix issue

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile_index', 'profile@index');



/*
--------------------------------------------------------------------------
FileController 
--------------------------------------------------------------------------
	It is used to upload pic and caption in the dashboard page.
	
*/

Route::post('/upload_pic_moto','FileController@upload_pic_moto');

Route::get('/upload_pic_moto','HomeController@index');


Route::get('/upload','ImageController@index()');

Route::post('/upload','ImageController@upload');

Route::get('/details',function(){
	return view('details');
});
Route::post('/details','HomeController@edit');



Route::get('/writeup','WriteupController@index');

Route::post('/writeup','WriteupController@store');

Route::get('/writeup/{id}','WriteupController@delete');

Route::post('/updates','WriteupController@updates');

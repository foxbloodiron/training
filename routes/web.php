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
    return redirect('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	// Master
	Route::get('/master/databarang/databarang', 'MasterController@databarang');
	Route::get('/master/datasuplier/datasuplier', 'MasterController@datasuplier');
	Route::get('/master/datacustomerkontraktor/datacustomerkontraktor', 'MasterController@datacustomerkontraktor');
	Route::get('/master/dataarmada/dataarmada', 'MasterController@dataarmada');
	Route::get('/master/datacustomerharian/datacustomerharian', 'MasterController@datacustomerharian');
	Route::get('/master/datapegawai/datapegawai', 'MasterController@datapegawai');

	
});

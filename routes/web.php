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
	Route::get('/master/databarang/databarang', 'MasterController@databarang')->name('databarang');
	Route::get('/master/datasuplier/datasuplier', 'MasterController@datasuplier')->name('datasuplier');
	Route::get('/master/datasuplier/datatable_datasuplier', 'MasterController@datatable_datasuplier')->name('datatable_datasuplier');
	Route::get('/master/datasuplier/simpan_datasuplier', 'MasterController@simpan_datasuplier')->name('simpan_datasuplier');
	Route::get('/master/datasuplier/get_editdatasuplier', 'MasterController@get_editdatasuplier')->name('get_editdatasuplier');
	Route::get('/master/datasuplier/delete_datasuplier', 'MasterController@delete_datasuplier')->name('delete_datasuplier');
	Route::get('/master/datacustomerkontraktor/datacustomerkontraktor', 'MasterController@datacustomerkontraktor')->name('datacustomerkontraktor');
	Route::get('/master/dataarmada/dataarmada', 'MasterController@dataarmada')->name('dataarmada');
	Route::get('/master/datacustomerharian/datacustomerharian', 'MasterController@datacustomerharian')->name('datacustomerharian');
	Route::get('/master/datapegawai/datapegawai', 'MasterController@datapegawai')->name('datapegawai');

	Route::get('/pusher', 'MasterController@pusher');
	Route::get('/get_notif', 'NotifController@get_notif')->name('get_notif');
});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware' => 'auth'], function() {
	
	Route::get('/', function () {
    	return view('home');
	});

	Route::get('/home', function () {
	    return rediret('/');
	});

	Route::resource('karyawan', 'KaryawanController');
	Route::resource('bagian', 'BagianController');
	Route::resource('mapel', 'MapelController');
	Route::resource('wali', 'WaliController');
	Route::resource('siswa', 'SiswaController');

	Route::resource('ta', 'TaController', [
		'except' => ['show']
	]);

	Route::resource('tingkat', 'TingkatController', [
		'except' => ['show']
	]);

	Route::resource('kelas', 'KelasController');

	Route::resource('riwayatPendidikan', 'RiwayatPendidikanController', [
		'except' => ['index', 'show']
	]);

	Route::resource('riwayatKepegawaian', 'RiwayatKepegawaianController', [
		'except' => ['index', 'show']
	]);

	Route::resource('keluargaKaryawan', 'KeluargaKaryawanController', [
		'except' => ['index','show']
	]);

});

Route::controller('auth', 'Auth\AuthController');
Route::controller('password', 'Auth\PasswordController');
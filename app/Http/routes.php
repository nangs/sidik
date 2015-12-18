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
	
	// Route::get('/', function () {
 //    	return view('home');
	// });

	// Route::get('/home', function () {
	//     return view('home');
	// });

	Route::resource('karyawan', 'KaryawanController');
	Route::resource('bagian', 'BagianController');
	Route::resource('wali', 'WaliController');
	Route::resource('siswa', 'SiswaController');
	Route::resource('tagihan', 'TagihanController');

	// Kelas
	Route::resource('kelas', 'KelasController');
	Route::get('/kelas/createJadwal/{kelas}', 'KelasController@createJadwal');
	Route::get('/kelas/editJadwal/{kelas}', 'KelasController@editJadwal');
	Route::get('/kelas/addSiswa/{kelas}', 'KelasController@addSiswa');
	Route::post('/kelas/storeJadwal/{kelas}', 'KelasController@storeJadwal');
	Route::post('/kelas/saveSiswa/{kelas}', 'KelasController@saveSiswa');
	Route::patch('/kelas/updateJadwal/{kelas}', 'KelasController@updateJadwal');

	Route::resource('jenisInventaris', 'JenisInventarisController');
	Route::resource('kategoriBuku', 'KategoriBukuController');
	Route::resource('tagsBuku', 'TagsBukuController');
	Route::resource('invTanah', 'InvTanahController');
	Route::resource('invBangunan', 'InvBangunanController');
	Route::resource('ruangan', 'RuanganController');
	Route::resource('ujian', 'UjianController');

	Route::resource('ta', 'TaController', [
		'except' => ['show']
	]);

	Route::resource('jabatan', 'JabatanController', [
		'except' => ['show']
	]);

	Route::resource('rekening', 'RekeningController', [
		'except' => ['show']
	]);

	Route::resource('mapel', 'MapelController', [
		'except' => ['show']
	]);

	Route::resource('jenisUjian', 'JenisUjianController', [
		'except' => ['show']
	]);

	Route::resource('tingkat', 'TingkatController', [
		'except' => ['show']
	]);

	Route::resource('jenjang', 'JenjangController', [
		'except' => ['show']
	]);

	Route::resource('riwayatPendidikan', 'RiwayatPendidikanController', [
		'except' => ['index', 'show']
	]);

	Route::resource('riwayatKepegawaian', 'RiwayatKepegawaianController', [
		'except' => ['index', 'show']
	]);

	Route::resource('riwayatMengajar', 'RiwayatMengajarController', [
		'except' => ['index', 'show']
	]);

	Route::resource('pengalamanKerja', 'PengalamanKerjaController', [
		'except' => ['index', 'show']
	]);

	Route::resource('keluargaKaryawan', 'KeluargaKaryawanController', [
		'except' => ['index','show']
	]);

	Route::resource('kalenderAkademik', 'KalenderAkademikController', [
		'except' => ['show']
	]);

	Route::resource('jamPelajaran', 'JamPelajaranController', [
		'except' => ['show']
	]);

	Route::resource('jadwalPelajaran', 'JadwalPelajaranController', [
		'except' => ['show']
	]);

	Route::resource('user', 'UserController', [
		'except' => ['show']
	]);

	Route::get('/kalenderAkademik/event', 'KalenderAkademikController@event');
	Route::get('/kalenderAkademik/kalender', 'KalenderAkademikController@kalender');

});

Route::controller('auth', 'Auth\AuthController');
// Route::controller('password', 'Auth\PasswordController');
// Route::controller('batik', 'BatikController');

// MODUL PSB
Route::get('/', 'HomeController@getIndex');

Route::get('/home', 'HomeController@getIndex');

Route::group(['prefix' => 'psb'], function() {

	Route::get('/', 'PsbController@getStep1');
	Route::get('step1', 'PsbController@getStep1');
	Route::post('step1', 'PsbController@postStep1');

	// Khusus yg sudah login
	Route::group(['middleware' => 'auth'], function() {

		// harus login untuk step 2 ke atas
		Route::get('printNomor/{psb}', 'PsbController@getPrintNomor');
		Route::get('step2/{psb}', 'PsbController@getStep2');
		Route::get('step3/{psb}', 'PsbController@getStep3');
		Route::get('step4/{psb}', 'PsbController@getStep4');
		Route::get('show/{psb}', 'PsbController@getShow');
		Route::patch('step2/{psb}', 'PsbController@patchStep2');

		// khusus admin
		Route::get('admin', 'PsbController@getAdmin');
		Route::get('sudahBayar/{psb}', 'PsbController@getSudahBayar');
		Route::get('dataOk/{psb}', 'PsbController@getDataOk');
		Route::get('testOk/{psb}', 'PsbController@getTestOk');
		Route::get('diterima/{psb}', 'PsbController@getDiterima');
		Route::get('diterimaTba/{psb}', 'PsbController@getDiterimaTba');
		Route::get('ditolak/{psb}', 'PsbController@getDitolak');
		Route::get('delete/{psb}', 'PsbController@getDelete');

	});

});
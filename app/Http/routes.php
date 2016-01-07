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

	Route::resource('tahun-ajaran', 'TaController', [
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

	Route::resource('form-wawancara-calon-santri', 'FormWawancaraCalonSantriController', [
		'except' => 'show'
	]);

	Route::resource('form-wawancara-orangtua', 'FormWawancaraOrangTuaCalonSantriController', [
		'except' => 'show'
	]);

	Route::resource('wawancara-calon-santri', 'WawancaraCalonSantriController', [
		'except' => 'show'
	]);

	Route::resource('wawancara-orang-tua', 'WawancaraOrangTuaCalonSantriController', [
		'except' => 'show'
	]);

	Route::resource('beasiswa-calon-siswa', 'BeasiswaCalonSiswaController', [
		'only' => ['store', 'update', 'destroy']
	]);

});

Route::controller('auth', 'Auth\AuthController');
// Route::controller('password', 'Auth\PasswordController');
// Route::controller('batik', 'BatikController');

Route::get('/', 'PsbController@index');
Route::get('/home', 'PsbController@index');

// streaming
Route::get('/streaming', function() {
	return view('streaming');
});

Route::group(['prefix' => 'psb'], function() {

	// Khusus yg sudah login
	Route::group(['middleware' => 'auth'], function() {

		Route::get('daftar', 'PsbController@getDaftar');
		Route::post('/', 'PsbController@postDaftar');

		Route::get('edit-form-daftar/{psb}', 'PsbController@getEditFormDaftar');
		Route::post('edit-form-daftar/{psb}', 'PsbController@postEditFormDaftar');

		Route::get('show/{psb}', 'PsbController@getShow');
		Route::get('isi-formulir/{psb}', 'PsbController@getIsiFormulir');
		Route::put('isi-formulir/{psb}', 'PsbController@putIsiFormulir');

		// khusus admin
		Route::get('admin', 'PsbController@getAdmin');
		Route::get('delete/{psb}', 'PsbController@getDelete');
		Route::get('edit/{psb}', 'PsbController@getEdit');
		Route::put('update/{psb}', 'PsbController@putUpdate');

		// konfirmasi
		Route::get('konfirmasi-pembayaran/{psb}', 'PsbController@getKonfirmasiPembayaran');
		Route::get('konfirmasi-formulir/{psb}', 'PsbController@getKonfirmasiFormulir');
		Route::get('konfirmasi-berkas/{psb}', 'PsbController@getKonfirmasiBerkas');
		Route::get('konfirmasi-test/{psb}', 'PsbController@getKonfirmasiTest');
		Route::get('konfirmasi-wawancara/{psb}', 'PsbController@getKonfirmasiWawancara');
		Route::get('konfirmasi-wawancara-ortu/{psb}', 'PsbController@getKonfirmasiWawancaraOrtu');
		Route::get('konfirmasi-TKD/{psb}', 'PsbController@getKonfirmasiTKD');
		Route::get('konfirmasi-diterima/{psb}', 'PsbController@getKonfirmasiDiterima');
		Route::get('konfirmasi-ditolak/{psb}', 'PsbController@getKonfirmasiDitolak');
	});

});

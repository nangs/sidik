<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        $router->model('karyawan', 'App\Karyawan');
        $router->model('bagian', 'App\Bagian');
        $router->model('jabatan', 'App\Jabatan');
        $router->model('mapel', 'App\Mapel');
        $router->model('wali', 'App\Wali');
        $router->model('siswa', 'App\Siswa');
        $router->model('tagihan', 'App\Tagihan');
        $router->model('ta', 'App\Ta');
        $router->model('tingkat', 'App\Tingkat');
        $router->model('kelas', 'App\Kelas');
        $router->model('riwayatPendidikan', 'App\RiwayatPendidikan');
        $router->model('riwayatKepegawaian', 'App\RiwayatKepegawaian');
        $router->model('riwayatMengajar', 'App\RiwayatMengajar');
        $router->model('pengalamanKerja', 'App\PengalamanKerja');
        $router->model('keluargaKaryawan', 'App\KeluargaKaryawan');
        $router->model('jenisUjian', 'App\JenisUjian');
        $router->model('jenisInventaris', 'App\JenisInventaris');
        $router->model('kategoriBuku', 'App\KategoriBuku');
        $router->model('tagsBuku', 'App\TagsBuku');
        $router->model('kalenderAkademik', 'App\KalenderAkademik');
        $router->model('invTanah', 'App\InvTanah');
        $router->model('invBangunan', 'App\InvBangunan');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}

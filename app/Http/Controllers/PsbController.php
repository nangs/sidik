<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use all requests required
use App\Http\Requests\PsbRequest;

use App\Http\Controllers\Controller;

// use all models required
use App\PrestasiCalonSiswa;
use App\BeasiswaCalonSiswa;
use App\OrangTuaCalonSiswa;
use App\AlamatCalonSiswa;
use App\AsalSekolah;
use App\CalonSiswa;
use App\User;
use App\Psb;
use App\Ta;
use Carbon;
use Auth;
use Session;

class PsbController extends Controller
{
    public function getIndex()
    {
        // select count(id) from psb group by jenjang
        // select jenjang j, count(id) c, (select count(id) from psb where jenjang=j and status_progress >= 2) as bayar from psb group by jenjang;
        // $query = 'select jenjang j, count(id) total,
        //     (select count(id) from psb where jenjang=j and status_progress >= 1 and tanggal_daftar between :start and :stop) as daftar
        //     (select count(id) from psb where jenjang=j and status_progress >= 2 and tanggal_daftar between :start and :stop) as bayar
        //     (select count(id) from psb where jenjang=j and status_progress >= 2 and tanggal_daftar between :start and :stop) as bayar
        //     (select count(id) from psb where jenjang=j and status_progress >= 2 and tanggal_daftar between :start and :stop) as bayar
        //     (select count(id) from psb where jenjang=j and status_progress >= 2 and tanggal_daftar between :start and :stop) as bayar
        //     (select count(id) from psb where jenjang=j and status_progress >= 2 and tanggal_daftar between :start and :stop) as bayar
        //     (select count(id) from psb where jenjang=j and status_progress >= 2 and tanggal_daftar between :start and :stop) as bayar
        //     from psb where tanggal_daftar between :start and :stop group by jenjang';

        return view('psb.index');
    }

    // untuk admin/panitia PSB, pake datatables
    public function getAdmin()
    {
        $user = Auth::user();
        $psbs = Psb::with('calonSiswa')->sekarang()->get()->sortBy('calonSiswa.nama');
        return view('psb.admin', ['psbs' => $psbs]);
    }

    public function getDaftar()
    {
        return view('psb.daftar', [
            'psb'           => new Psb(['tanggal_daftar' => date('Y-m-d')]),
            'calonSiswa'    => new CalonSiswa,
            'url'           => '/psb',
            'action'        => 'create-pendaftaran'
        ]);
    }

    public function postDaftar(PsbRequest $request)
    {
        $psb        = Psb::create($request->get('psb'));
        $calonSiswa = $psb->calonSiswa()->create($request->get('calonSiswa'));

        $psb->update(['status_progress' => Psb::STATUS_DAFTAR]);
        Session::flash('alert', 'Data calon santri telah tersimpan');

        return redirect('/psb/admin/');
    }

    public function getEditFormDaftar(Psb $psb)
    {
        return view('psb.daftar', [
            'psb'           => $psb,
            'calonSiswa'    => $psb->calonSiswa,
            'url'           => '/psb/editFormDaftar/'.$psb->id,
            'action'        => 'edit-pendaftaran'
        ]);
    }

    public function postEditFormDaftar(Psb $psb, PsbRequest $request)
    {
        $psb->update($request->get('psb'));
        $psb->calonSiswa->update($request->get('calonSiswa'));

        Session::flash('alert', 'Data calon santri telah tersimpan');

        return redirect('/psb/admin/');
    }

    public function getIsiFormulir(Psb $psb)
    {
        if ($psb->status_progress < Psb::STATUS_BAYAR_OK) {
            Session::flash('alert', 'Pembayaran calon santri terkait belum dikonfirmasi');
            return redirect('/psb/show/'.$psb->id);
        }

        return view('psb.isiFormulir', [
            'psb'               => $psb,
            'calonSiswa'        => $psb->calonSiswa,
            'Wali'              => new OrangTuaCalonSiswa(['hubungan' => 'Wali', 'agama' => 'Islam']),
            'Ayah'              => new OrangTuaCalonSiswa(['hubungan' => 'Ayah', 'agama' => 'Islam']),
            'Ibu'               => new OrangTuaCalonSiswa(['hubungan' => 'Ibu', 'agama' => 'Islam']),
            'alamatCalonSiswa'  => new AlamatCalonSiswa,
            'asalSekolah'       => new AsalSekolah,
            'beasiswa'          => new BeasiswaCalonSiswa,
            'prestasi'          => new PrestasiCalonSiswa,
            'action'            => 'create'
        ]);
    }

    public function putIsiFormulir(Psb $psb, PsbRequest $request)
    {
        $psb->update($request->get('psb'));
        $psb->calonSiswa()->update($request->get('calonSiswa'));
        $psb->calonSiswa->ortu()->create($request->get('Wali'));
        $psb->calonSiswa->ortu()->create($request->get('Ayah'));
        $psb->calonSiswa->ortu()->create($request->get('Ibu'));
        $psb->calonSiswa->alamat()->create($request->get('alamatCalonSiswa'));

        if ($request->get('asalSekolah') && $request->get('asalSekolah')['nama'] !== '') {
            $asalSekolah = AsalSekolah::create($request->get('asalSekolah'));

            $dataCalonSiswa = $request->get('calonSiswa');
            $dataCalonSiswa['asal_sekolah_id'] = $asalSekolah->id;
            $psb->calonSiswa()->update($dataCalonSiswa);
        }

        // data beasiswa & prestasi
        if ($request->get('beasiswa') !== null) {
          foreach ($request->get('beasiswa') as $b) {
            if ($b['jenis'] !== '') {
              $psb->calonSiswa->beasiswa()->create($b);
            }
          }
        }

        if ($request->get('prestasi') !== null) {
          foreach ($request->get('prestasi') as $b) {
              if ($b['tahun'] !== '') {
                  $psb->calonSiswa->prestasi()->create($b);
              }
          }
        }

        $psb->update(['status_progress' => Psb::STATUS_ISI_FORM]);

        return redirect('/psb/show/'.$psb->id);
    }

    public function getEdit(Psb $psb)
    {
        if ($psb->status_progress < Psb::STATUS_ISI_FORM) {
            Session::flash('alert', 'Formulir belum diisi');
            return redirect('/psb/show/'.$psb->id);
        }

        $wali           = $psb->calonSiswa->ortu()->wali()->first();
        $ayah           = $psb->calonSiswa->ortu()->ayah()->first();
        $ibu            = $psb->calonSiswa->ortu()->ibu()->first();
        $asalSekolah    = $psb->calonSiswa->asalSekolah;
        $beasiswa       = $psb->calonSiswa->beasiswa;
        $prestasi       = $psb->calonSiswa->prestasi;

        return view('psb.edit', [
            'psb'               => $psb,
            'calonSiswa'        => $psb->calonSiswa,
            'Wali'              => $wali != null ? $wali : new OrangTuaCalonSiswa(['hubungan' => 'Wali', 'agama' => 'Islam']),
            'Ayah'              => $ayah != null ? $ayah : new OrangTuaCalonSiswa(['hubungan' => 'Ayah', 'agama' => 'Islam']),
            'Ibu'               => $ibu != null ? $ibu : new OrangTuaCalonSiswa(['hubungan' => 'Ibu', 'agama' => 'Islam']),
            'alamatCalonSiswa'  => $psb->calonSiswa->alamat ? $psb->calonSiswa->alamat : new AlamatCalonSiswa,
            'asalSekolah'       => $asalSekolah != null ? $asalSekolah : new AsalSekolah,
            'beasiswa'          => $beasiswa ? $beasiswa : new BeasiswaCalonSiswa ,
            'prestasi'          => $prestasi ? $prestasi : new PrestasiCalonSiswa,
            'action'            => 'edit'
        ]);
    }

    public function putUpdate(Psb $psb, PsbRequest $request)
    {
        $wali           = $psb->calonSiswa->ortu()->wali()->first();
        $ayah           = $psb->calonSiswa->ortu()->ayah()->first();
        $ibu            = $psb->calonSiswa->ortu()->ibu()->first();
        $asalSekolah    = $psb->calonSiswa->asalSekolah;

        $psb->update($request->get('psb'));
        $psb->calonSiswa()->update($request->get('calonSiswa'));

        if ($wali == null) {
            OrangTuaCalonSiswa::create($request->get('Wali'));
        } else {
            $wali->update($request->get('Wali'));
        }

        if ($ayah == null) {
            OrangTuaCalonSiswa::create($request->get('Ayah'));
        } else {
            $ayah->update($request->get('Ayah'));
        }

        if ($ibu == null) {
            OrangTuaCalonSiswa::create($request->get('Ibu'));
        } else {
            $ibu->update($request->get('Ibu'));
        }

        if ($request->get('asalSekolah') && $request->get('asalSekolah')['nama'] !== '') {

            if ($psb->calonSiswa->asalSekolah) {
                $psb->calonSiswa->asalSekolah()->update($request->get('asalSekolah'));
            }

            else {
                $asalSekolah = AsalSekolah::create($request->get('asalSekolah'));

                $dataCalonSiswa = $request->get('calonSiswa');
                $dataCalonSiswa['asal_sekolah_id'] = $asalSekolah->id;
                $psb->calonSiswa()->update($dataCalonSiswa);
            }
        }

        $psb->calonSiswa->alamat()->update($request->get('alamatCalonSiswa'));

        // data beasiswa & prestasi
        // if ($request->get('beasiswa') !== null) {
        //   foreach ($request->get('beasiswa') as $b) {
        //     if ($b['jenis'] !== '') {
        //       $psb->calonSiswa->beasiswa()->create($b);
        //     }
        //   }
        // }
        //
        // if ($request->get('prestasi') !== null) {
        //   foreach ($request->get('prestasi') as $b) {
        //       if ($b['tahun'] !== '') {
        //           $psb->calonSiswa->prestasi()->create($b);
        //       }
        //   }
        // }

        return redirect('/psb/show/'.$psb->id);
    }

    public function getShow(Psb $psb)
    {
        return view('psb.show', ['psb' => $psb]);
    }

    public function getDelete(Psb $psb, Request $request)
    {
        OrangTuaCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        AlamatCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        PrestasiCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        BeasiswaCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        CalonSiswa::where('psb_id', $psb->id)->delete();
        $psb->delete();

        return $this->response($psb, $request);
    }

    public function getKonfirmasiPembayaran(Psb $psb, Request $request)
    {
        $psb->update(['status_pembayaran' => 1, 'status_progress' => Psb::STATUS_BAYAR_OK]);

        return $this->response($psb, $request);
    }

    public function getKonfirmasiFormulir(Psb $psb, Request $request)
    {
        if ($psb->status_progress < Psb::STATUS_ISI_FORM) {
            return json_encode([
                'success'   => false,
                'message'   => 'Formulir belum diisi'
            ]);
        }

        $psb->update(['status_formulir' => 1, 'status_progress' => Psb::STATUS_FORM_OK]);
        return $this->response($psb, $request);
    }

    // public function getKonfirmasiBerkas(Psb $psb, Request $request)
    // {
    //     if ($psb->status_progress < Psb::STATUS_FORM_OK) {
    //         return json_encode([
    //             'success'   => false,
    //             'message'   => 'Formulir belum lengkap'
    //         ]);
    //     }
    //
    //     $psb->update(['status_berkas' => 1, 'status_progress' => Psb::STATUS_BERKAS_OK]);
    //     return $this->response($psb, $request);
    // }

    public function getKonfirmasiTest(Psb $psb, Request $request)
    {
        if ($psb->status_progress < Psb::STATUS_ISI_FORM) {
            return json_encode([
                'success'   => false,
                'message'   => 'Formulir belum diisi'
            ]);
        }

        $psb->update(['status_test' => 1, 'status_progress' => Psb::STATUS_TEST_OK]);
        return $this->response($psb, $request);
    }

    public function getKonfirmasiWawancara(Psb $psb, Request $request)
    {
        if ($psb->status_progress < Psb::STATUS_TEST_OK) {
            return json_encode([
                'success'   => false,
                'message'   => 'Siswa belum melakukan test'
            ]);
        }

        $psb->update(['status_wawancara' => 1, 'status_progress' => Psb::STATUS_WAWANCARA_OK]);
        return $this->response($psb, $request);
    }

    public function getKonfirmasiWawancaraOrtu(Psb $psb, Request $request)
    {
        if ($psb->status_progress < Psb::STATUS_FORM_OK) {
            return json_encode([
                'success'   => false,
                'message'   => 'Formulir belum lengkap'
            ]);
        }

        $psb->update(['status_wawancara_ortu' => 1, 'status_progress' => Psb::STATUS_WAWANCARA_ORTU_OK]);
        return $this->response($psb, $request);
    }

    // public function getKonfirmasiTKD(Psb $psb, Request $request)
    // {
    //     if ($psb->status_progress < Psb::STATUS_WAWANCARA_ORTU_OK) {
    //         return json_encode([
    //             'success'   => false,
    //             'message'   => 'Orang Tua belum melakukan wawancara'
    //         ]);
    //     }
    //
    //     $psb->update(['status_tkd' => 1, 'status_progress' => Psb::STATUS_TKD_OK]);
    //     return $this->response($psb, $request);
    // }

    public function getKonfirmasiDiterima(Psb $psb, Request $request)
    {
        if ($psb->status_progress < Psb::STATUS_WAWANCARA_ORTU_OK) {
            return json_encode([
                'success'   => false,
                'message'   => 'Orang tua belum melakukan wawancara'
            ]);
        }

        $psb->update(['status_penerimaan' => 1, 'status_progress' => Psb::STATUS_DITERIMA]);
        return $this->response($psb, $request);
    }

    public function getKonfirmasiDitolak(Psb $psb, Request $request)
    {
        if ($psb->status_progress < Psb::STATUS_WAWANCARA_ORTU_OK) {
            return json_encode([
                'success'   => false,
                'message'   => 'Orang tua belum melakukan wawancara'
            ]);
        }

        $psb->update(['status_penerimaan' => 2, 'status_progress' => Psb::STATUS_DITOLAK]);
        return $this->response($psb, $request);
    }

    protected function response(Psb $psb, Request $request)
    {
        if ($request->ajax()) {
            return json_encode([
                'success'   => true,
                'jenjang'   => $psb->jenjang,
                'html'      => view('psb._list', [
                    'psbs'      => Psb::where('jenjang', $psb->jenjang)->sekarang()->get(),
                    'jenjang'   => $psb->jenjang
                ])->render(),
            ]);
        }

        else {
            return redirect('/psb/admin');
        }
    }

}

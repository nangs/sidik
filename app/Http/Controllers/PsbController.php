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
use App\Psb;
use App\Ta;
use Carbon;

class PsbController extends Controller
{
    // untuk pembelian formulir
    public function getStep1()
    {
        return view('psb.step1', [
            'psb'               => new Psb,
            'calonSiswa'        => new CalonSiswa,
            'Wali'              => new OrangTuaCalonSiswa,
        ]);
    }

    // step 1, submit pembelian formulir
    public function postStep1(PsbRequest $request)
    {
        // $this->validate($request, []);

        $psb            = Psb::create($request->get('psb'));
        $calonSiswa     = $psb->calonSiswa()->create($request->get('calonSiswa'));
        $waliCalonSiswa = $calonSiswa->ortu()->create($request->get('Wali'));
        
        $dataAyah = $dataIbu = $request->get('Wali');
        $dataAyah['hubungan']   = 'Ayah';
        $dataIbu['hubungan']    = 'Ibu';
        $dataIbu['nama']        = 'Nama Ibu';

        $ayahCalonSiswa = $calonSiswa->ortu()->create($dataAyah);
        $ibuCalonSiswa  = $calonSiswa->ortu()->create($dataIbu);

        // isi alamat calon siswa berdasarkan alamat orang tua
        $dataAlamat = $request->get('Wali');
        $unset      = ['email', 'nama', 'pekerjaan', 'pendidikan', 'penghasilan_bulanan'];
        
        foreach ($unset as $u) {
            unset($dataAlamat[$u]);
        }

        $dataAlamat['jenis_tinggal'] = 1; // bersama orang tua
        $alamatCalonSiswa            = $calonSiswa->alamat()->create($dataAlamat);

        // TODO : email notifikasi ke panitia psb untuk konfirmasi pembayaran, perlu?

        $psb->update(['step' => 2]);
        return redirect('/psb/step2/'.$psb->id);
    }

    // step 2, isi formulir
    public function getSudahBayar(Psb $psb)
    {
        $psb->status_pembayaran             = 1;
        $psb->waktu_verifikasi_pembayaran   = Carbon::now();
        $psb->save();

        return redirect('/psb/admin');
    }

    // step 2 jika sudah bayar tampilkan formulir lengkap, jika blm tampilkan status pembayaran blm dikonfirmasi
    public function getStep2(Psb $psb)
    {
        //  kalo step > 2 arahkan ke step yg sesuai

        if ($psb->step > 2) {
            return redirect('/psb/step'.$psb->step.'/'.$psb->id);
        }

        return view('psb.step2', [
            'psb'               => $psb,
            'calonSiswa'        => $psb->calonSiswa,
            'Wali'              => $psb->calonSiswa->ortu()->wali()->first(),
            'Ayah'              => $psb->calonSiswa->ortu()->ayah()->first(),
            'Ibu'               => $psb->calonSiswa->ortu()->ibu()->first(),
            'alamatCalonSiswa'  => $psb->calonSiswa->alamat,
            'asalSekolah'       => new AsalSekolah,
            'beasiswa'          => new BeasiswaCalonSiswa,
            'prestasi'          => new PrestasiCalonSiswa,
        ]);
    }

    // step 2, submit formulir
    public function patchStep2(Psb $psb, PsbRequest $request)
    {
        // dd($request->prestasi);

        // simpan datanya
        $psb->calonSiswa()->update($request->get('calonSiswa'));
        $psb->calonSiswa->ortu()->wali()->update($request->get('Wali'));
        $psb->calonSiswa->ortu()->ayah()->update($request->get('Ayah'));
        $psb->calonSiswa->ortu()->ibu()->update($request->get('Ibu'));
        $psb->calonSiswa->alamat()->update($request->get('alamatCalonSiswa'));
        
        if ($request->get('asalSekolah') && $request->get('asalSekolah')['nama'] !== ''){
            $asalSekolah = AsalSekolah::create($request->get('asalSekolah'));

            $dataCalonSiswa = $request->get('calonSiswa');
            $dataCalonSiswa['asal_sekolah_id'] = $asalSekolah->id;
            $psb->calonSiswa()->update($dataCalonSiswa);
        }

        // data beasiswa & prestasi
        foreach ($request->get('beasiswa') as $b) {
            if ($b['jenis'] !== '') {
                $psb->calonSiswa->beasiswa()->create($b);
            }
        }

        foreach ($request->get('prestasi') as $b) {
            if ($b['tahun'] !== '') {
                $psb->calonSiswa->prestasi()->create($b);
            }
        }

        // upload dokumen
        $docs = [
            'rapor'     => 'Rapor 2 Semester Terakhir', 
            'kk'        => 'Kartu Keluarga', 
            'akta'      => 'Akta Kelahiran', 
            'foto'      => 'Pas Foto', 
            'sk_sehat'  => 'Surat Keterangan Sehat'
        ];

        foreach ($docs as $k => $v) {

            if ($request->hasFile($k)) {
            
                $file = $request->file($k);
                
                $fileName = time().'-'.$file->getClientOriginalName();
                $file->move('uploads', $fileName);

                $psb->calonSiswa->dokumen()->create(['nama' => $v, 'file' => $fileName]);

            }

        }
        $psb->update(['step' => 3]);
        return redirect('/psb/step3/'.$psb->id);
    }

    // step 3, silakan test & wawancara
    public function getDataOk(Psb $psb)
    {
        $psb->status_verifikasi_data  = 1;
        $psb->waktu_verifikasi_data   = Carbon::now();
        $psb->save();

        return redirect('/psb/admin');
    }

    // tampilkan data sedang diverifikasi, jika data sudah diverifikasi tampilkan jadwal test & wawancara
    public function getStep3(Psb $psb)
    {
        if ($psb->step > 3) {
            return redirect('/psb/step'.$psb->step.'/'.$psb->id);
        }

        return view('psb.step3', ['psb' => $psb]);
    }

    // step 4, tunggu pengumuman
    public function getTestOk(Psb $psb)
    {
        $psb->status_test  = 1;
        $psb->step         = 4;
        $psb->save();

        return redirect('/psb/admin');
    }

    // step 4, pengumuman
    public function getDiterima(Psb $psb)
    {
        $psb->status  = 1;
        $psb->save();

        return redirect('/psb/admin');
    }

    // tampilkan status selesai, tampilkan pengumuman. TODO : sesuaikan step
    public function getStep4(Psb $psb)
    {
        return view('psb.step4', ['psb' => $psb]);
    }

    public function getShow(Psb $psb)
    {
        return view('psb.show', ['psb' => $psb]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psb $psb)
    {
        $psb->delete();
        return redirect('/psb');
    }

    public function getCari(Request $request)
    {
        $psb = Psb::where('created_at', date('Y-m-d H:i:s', $request->nomor_pendaftaran))->first();
        
        if ($psb) {
            // TODO : redirect ke step yang sesuai
            return redirect('/psb/step'.$psb->step.'/'.$psb->id);
        } else {
            return view('errors.404');
        }
    }

    public function getSyarat()
    {
        return view('psb.syarat');
    }

    // untuk admin/panitia PSB, pake datatables
    public function getAdmin()
    {
        return view('psb.admin', [
            'psbs' => Psb::with('calonSiswa')->sekarang()->get()->sortBy('calonSiswa.nama'),
        ]);
    }

    // chart, jumlah yg daftar per step, per tingkat, per jenjang, 
    public function getJurnal()
    {
        return view('psb.jurnal', ['psb' => Psb::with('calonSiswa')->get()]);
    }
}

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
    // untuk admin/panitia PSB, pake datatables
    public function getAdmin()
    {
        return view('psb.admin', [
            'psbsSD' => Psb::where('tahun_ajaran', Ta::active()->first()->periode)->SD()->get(),
            'psbsSMP' => Psb::where('tahun_ajaran', Ta::active()->first()->periode)->SMP()->get(),
            'psbsSMA' => Psb::where('tahun_ajaran', Ta::active()->first()->periode)->SMA()->get(),
        ]);
    }

    // chart, jumlah yg daftar per step, per tingkat, per jenjang, 
    public function getJurnal()
    {
        return view('psb.jurnal');
    }

    // untuk pembelian formulir
    public function getStep1()
    {
        return view('psb.step1', [
            'psb'               => new Psb,
            'calonSiswa'        => new CalonSiswa,
            'ortu'              => new OrangTuaCalonSiswa,
        ]);
    }

    // submit pembelian formulir redirect ke step 2
    public function postStep1(Request $request)
    {
        // TODO : validation, better move to another request file
        $this->validate($request, [
            // PSB
            'psb.jenjang'               => 'required|numeric',
            'psb.tingkat'               => 'required|numeric',
            'psb.tahun_ajaran'          => 'required',
            'psb.metode_pembayaran'     => 'required',
            'psb.tanggal_pembayaran'    => 'date|required',
            'psb.jumlah_pembayaran'     => 'required|numeric',
            // Data Siswa
            'calonSiswa.nama'           => 'required',
            'calonSiswa.jenis_kelamin'  => 'boolean',
            'calonSiswa.nisn'           => 'required',
            'calonSiswa.tempat_lahir'   => 'required',
            'calonSiswa.tanggal_lahir'  => 'date|required',
            'calonSiswa.tinggi_badan'   => 'numeric',
            'calonSiswa.berat_badan'    => 'numeric',
            'calonSiswa.jumlah_saudara' => 'numeric',
            // Data Wali Calon Siswa
            'ortu.nama'                 => 'required',
            'ortu.tahun_lahir'          => 'numeric',
            'ortu.agama'                => 'required',
            'ortu.pekerjaan'            => 'required',
            'ortu.penghasilan_bulanan'  => 'required',
            'ortu.pendidikan'           => 'required',
            'ortu.alamat'               => 'required',
            'ortu.rt'                   => 'required',
            'ortu.rw'                   => 'required',
            'ortu.kelurahan'            => 'required',
            'ortu.kode_pos'             => 'required',
            'ortu.kecamatan'            => 'required',
            'ortu.kota'                 => 'required',
            'ortu.provinsi'             => 'required',
            'ortu.hp'                   => 'required',
            'ortu.email'                => 'email'
        ]);

        $psb = Psb::create($request->get('psb'));

        $dataCalonSiswa             = $request->get('calonSiswa');
        $dataCalonSiswa['psb_id']   = $psb->id;
        $calonSiswa                 = CalonSiswa::create($dataCalonSiswa);
        
        $dataOrtu                   = $request->get('ortu');
        $dataOrtu['calon_siswa_id'] = $calonSiswa->id;
        $dataOrtu['is_wali']        = 1;
        $ortuCalonSiswa             = OrangTuaCalonSiswa::create($dataOrtu);

        // TODO : email notifikasi ke panitia psb untuk konfirmasi pembayaran, perlu?

        return redirect('/psb/step2/'.$psb->id);
    }

    // jika sudah bayar tampilkan formulir lengkap, jika blm tampilkan status pembayaran blm dikonfirmasi
    public function getStep2(Psb $psb)
    {
        return view('psb.step2', [
            'psb'               => $psb,
            'calonSiswa'        => $psb->calonSiswa,
            'ortu'              => $psb->calonSiswa->ortu()->wali()->first(),
            'alamatCalonSiswa'  => new AlamatCalonSiswa,
            'asalSekolah'       => new AsalSekolah,
            'beasiswa'          => new BeasiswaCalonSiswa,
            'prestasi'          => new PrestasiCalonSiswa,
        ]);
    }

    public function postStep2(Psb $psb)
    {
        // TODO: simpan datanya

        return redirect('/psb/step3');
    }

    // tampilkan data sedang diverifikasi, jika data sudah diverifikasi tampilkan jadwal test & wawancara
    public function getStep3(Psb $psb)
    {
        return view('psb.step3', ['psb' => $psb]);
    }

    public function postStep3(Psb $psb)
    {
        // TODO: simpan datanya

        return redirect('/psb/step4');
    }

    // tampilkan status selesai, tampilkan pengumuman, jurnal 
    // alias : show
    public function getStep4(Psb $psb)
    {
        return view('psb.step4', ['psb' => $psb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Psb $psb)
    {
        return view('psb.edit', ['psb' => $psb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PsbRequest $request, Psb $psb)
    {
        $psb->update($request->all());
        return redirect('/psb');
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
        $calonSiswa = CalonSiswa::where('nisn', $request->nisn)->first();
        
        if ($calonSiswa) {
            return redirect('/psb/step2/'.$calonSiswa->psb_id);
        } else {
            return view('errors.404');
        }
    }

    public function getSudahBayar(Psb $psb)
    {
        $psb->status_pembayaran             = 1;
        $psb->waktu_verifikasi_pembayaran   = Carbon::now();
        $psb->save();

        return redirect('/psb/admin');
    }

    public function getSyarat()
    {
        return view('psb.syarat');
    }
}

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

class PsbController extends Controller
{
    // untuk admin/panitia PSB, pake datatables
    public function getAdmin()
    {
        $user = Auth::user();
        $psbs = Psb::with('calonSiswa')->sekarang()->get()->sortBy('calonSiswa.nama');
        return view('psb.admin', ['psbs' => $psbs]);
    }

    // untuk pembelian formulir
    public function getStep1()
    {
        return view('psb.step1', [
            'psb'           => new Psb(['jumlah_pembayaran' => 250000, 'tanggal_pembayaran' => date('Y-m-d')]),
            'calonSiswa'    => new CalonSiswa,
            'user'          => new User,
            'step'          => 1
        ]);
    }

    // step 1, submit pembelian formulir
    public function postStep1(PsbRequest $request)
    {
        $psb        = Psb::create($request->get('psb'));
        $calonSiswa = $psb->calonSiswa()->create($request->get('calonSiswa'));

        // TODO : email notifikasi ke panitia psb untuk konfirmasi pembayaran, perlu?
        // Mail::send('emails.register', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // });

        $user =  User::create([
            'name' => $calonSiswa->nama,
            'email' => $calonSiswa->nama,
            'password' => bcrypt(strtotime($calonSiswa->created_at)),
            'role' => 'pendaftar'
        ]);

        $psb->update(['step' => 2, 'user_id' => $user->id]);
        Auth::login($user);

        return redirect('/psb/step2/'.$psb->id);
    }

    // step 2, isi formulir
    public function getSudahBayar(Psb $psb, Request $request)
    {
        $psb->status_pembayaran             = 1;
        $psb->waktu_verifikasi_pembayaran   = Carbon::now();
        $psb->save();

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
            'Wali'              => new OrangTuaCalonSiswa(['hubungan' => 'Wali', 'agama' => 'Islam']),
            'Ayah'              => new OrangTuaCalonSiswa(['hubungan' => 'Ayah', 'agama' => 'Islam']),
            'Ibu'               => new OrangTuaCalonSiswa(['hubungan' => 'Ibu', 'agama' => 'Islam']),
            'alamatCalonSiswa'  => new AlamatCalonSiswa,
            'asalSekolah'       => new AsalSekolah,
            'beasiswa'          => new BeasiswaCalonSiswa,
            'prestasi'          => new PrestasiCalonSiswa,
            'step'              => 2
        ]);
    }

    // step 2, submit formulir
    public function patchStep2(Psb $psb, PsbRequest $request)
    {
        // dd($request);

        // simpan datanya
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

        // upload dokumen
        // $docs = [
        //     'rapor'     => 'Rapor 2 Semester Terakhir',
        //     'kk'        => 'Kartu Keluarga',
        //     'akta'      => 'Akta Kelahiran',
        //     'foto'      => 'Pas Foto',
        //     'sk_sehat'  => 'Surat Keterangan Sehat'
        // ];

        // foreach ($docs as $k => $v) {

        //     if ($request->hasFile($k)) {

        //         $file = $request->file($k);

        //         $fileName = time().'-'.$file->getClientOriginalName();
        //         $file->move('uploads', $fileName);

        //         $psb->calonSiswa->dokumen()->create(['nama' => $v, 'file' => $fileName]);

        //     }

        // }

        $psb->update(['step' => 3]);

        // TODO : email notifikasi ke panitia psb untuk konfirmasi pembayaran, perlu?
        // Mail::send('emails.register', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // });

        return redirect('/psb/step3/'.$psb->id);
    }

    // tampilkan data sedang diverifikasi, jika data sudah diverifikasi tampilkan jadwal test & wawancara
    public function getStep3(Psb $psb)
    {
        if ($psb->step > 3) {
            return redirect('/psb/step'.$psb->step.'/'.$psb->id);
        }

        return view('psb.step3', ['psb' => $psb]);
    }

    // tampilkan status selesai, tampilkan pengumuman. TODO : sesuaikan step
    public function getStep4(Psb $psb)
    {
        if ($psb->step < 4) {
            return redirect('/psb/step'.$psb->step.'/'.$psb->id);
        }

        return view('psb.step4', ['psb' => $psb]);
    }

    public function getShow(Psb $psb)
    {
        return view('psb.show', ['psb' => $psb]);
    }

    public function getPrintNomor(Psb $psb)
    {
        return view('psb.printNomor', ['psb' => $psb]);
    }

    public function getPrintFormulir(Psb $psb)
    {
        return view('psb.printFormulir', ['psb' => $psb]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDelete(Psb $psb, Request $request)
    {
        OrangTuaCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        AlamatCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        PrestasiCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        BeasiswaCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        User::where('id', $psb->user_id)->delete();
        CalonSiswa::where('psb_id', $psb->id)->delete();

        $jenjang = $psb->jenjang;

        $psb->delete();

        return $this->response($psb, $request);
    }

    public function postKonfirmasiPembayaran(Psb $psb, Request $request)
    {
        $psb->update(['status_pembayaran' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiFormulir(Psb $psb, Request $request)
    {
        $psb->update(['status_formulir' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiBerkas(Psb $psb, Request $request)
    {
        $psb->update(['status_berkas' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiTest(Psb $psb, Request $request)
    {
        $psb->update(['status_test' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiWawancara(Psb $psb, Request $request)
    {
        $psb->update(['status_wawancara' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiWawancaraOrtu(Psb $psb, Request $request)
    {
        $psb->update(['status_wawancara_ortu' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiTKD(Psb $psb, Request $request)
    {
        $psb->update(['status_tkd' => 1]);
        return $this->response($psb, $request);
    }

    public function postKonfirmasiPenerimaan(Psb $psb, Request $request)
    {
        $psb->update(['status_penerimaan' => 1]);
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

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
            'Wali'              => new OrangTuaCalonSiswa(['hubungan' => 'Wali']),
            'Ayah'              => new OrangTuaCalonSiswa(['hubungan' => 'Ayah']),
            'Ibu'               => new OrangTuaCalonSiswa(['hubungan' => 'Ibu']),
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
        // dd($request->prestasi);

        // simpan datanya
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

        // TODO : email notifikasi ke panitia psb untuk konfirmasi pembayaran, perlu?
        // Mail::send('emails.register', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // });

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

    // step 4, pengumuman
    public function getDitolak(Psb $psb)
    {
        $psb->status  = 2;
        $psb->save();

        return redirect('/psb/admin');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psb $psb)
    {
        // hapus data orang tua
        OrangTuaCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        // hapus data alamat
        AlamatCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        // hapus data prestasi & beasiswa
        PrestasiCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        BeasiswaCalonSiswa::where('calon_siswa_id', $psb->calonSiswa->id)->delete();
        // hapus data siswa
        CalonSiswa::where('psb_id', $psb->id)->delete();

        $psb->delete();
        return redirect('/psb/admin');
    }

    // untuk admin/panitia PSB, pake datatables
    public function getAdmin()
    {
        $user = Auth::user();
        $psbs = Psb::with('calonSiswa')->sekarang()->get()->sortBy('calonSiswa.nama');
        return view('psb.admin', ['psbs' => $psbs]);
    }

}

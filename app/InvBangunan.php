<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvBangunan extends Model
{
    protected $table = 'inv_bangunan';

    protected $fillable = [
    	'tanah_id', 'kode', 'nama', 'luas', 'jumlah_lantai', 'tahun_pembangunan', 'tahun_selesai', 'tahun_pakai',
    	'alamat', 'nomor_imb', 'tgl_imb', 'asal_perolehan', 'asal_dana', 'nomor_bukti_perolehan', 
    	'rekanan', 'kondisi', 'material_lantai', 'material_tembok', 'material_atap', 'nilai_asset'
    ];

    public function tanah()
    {
    	return $this->belongsTo('App\InvTanah', 'tanah_id');
    }

    public function ruangans()
    {
        return $this->hasMany('App\Ruangan', 'bangunan_id');
    }

    public static function kondisiList()
    {
        return [
            'Baik'          => 'Baik',
            'Rusak Ringan'  => 'Rusak Ringan',
            'Rusak Berat'   => 'Rusak Berat',
        ];
    }
}

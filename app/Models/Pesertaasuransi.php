<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesertaasuransi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'tgl_pengajuan',
        'nama_klp_ternak',
        'nama_peternak',
        'nama_ketua_klp_ternak',
        'no_hp',
        'desa',
        'kecamatan',
        'kabupaten_kota',
        'jenis_ternak',
        'jumlah_hewan_ternak',
        'jumlah_premi_swadaya',
    ];
}

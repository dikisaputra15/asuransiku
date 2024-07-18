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
        'nama_peternak',
        'no_hp',
        'desa',
        'kecamatan',
        'kabupaten_kota',
        'jenis_ternak',
        'jumlah_hewan_ternak',
        'harga',
        'status',
        'keterangan',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratpengantar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'kepala_surat',
        'tempat',
        'tanggal',
        'tujuan',
        'nama_surat',
        'nomor',
        'jenis_surat',
        'volume',
        'keterangan',
        'nama_ketua_klp_tani',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksakesehatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_peserta',
        'tgl_pemeriksaan',
        'pemeriksa1',
        'pemeriksa2',
    ];
}

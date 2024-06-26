<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailperiksa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_periksa',
        'nama_ternak',
        'nomor',
        'hasil_pemeriksaan',
    ];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesertaasuransis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->date('tgl_pengajuan');
            $table->string('nama_klp_ternak');
            $table->string('nama_peternak');
            $table->string('nama_ketua_klp_ternak');
            $table->string('no_hp');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('jenis_ternak');
            $table->integer('jumlah_ternak');
            $table->double('jumlah_premi_swadaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertaasuransis');
    }
};

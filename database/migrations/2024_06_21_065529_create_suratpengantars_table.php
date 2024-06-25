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
        Schema::create('suratpengantars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('kepala_surat');
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('tujuan');
            $table->string('nama_surat');
            $table->string('nomor');
            $table->string('jenis_surat');
            $table->string('volume');
            $table->string('keterangan');
            $table->string('nama_ketua_klp_ternak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratpengantars');
    }
};

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
        Schema::create('detailperiksas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_periksa');
            $table->string('nama_ternak');
            $table->string('nomor');
            $table->string('berat');
            $table->string('umur');
            $table->text('hasil_pemeriksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailperiksas');
    }
};

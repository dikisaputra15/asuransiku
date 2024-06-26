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
        Schema::create('periksakesehatans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peserta');
            $table->date('tgl_pemeriksaan');
            $table->string('pemeriksa1');
            $table->string('pemeriksa2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksakesehatans');
    }
};

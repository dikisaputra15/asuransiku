@extends('layouts.master')

@section('title','Edit Pengajuan Peserta')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Edit Peserta Asuransi</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('pesertaasuransi.update', $pesertaasuransi) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Peternak</label>
                    <select class="form-control" name="id_user" readonly>
                            <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pengajuan" value="{{ $pesertaasuransi->tgl_pengajuan }}">
                </div>

                <div class="form-group">
                    <label>No Handhpone</label>
                    <input type="text" class="form-control" name="no_hp" value="{{ $pesertaasuransi->no_hp }}">
                </div>

                <div class="form-group">
                    <label>Kabupaten / Kota</label>
                    <select class="form-control" name="kabupaten_kota">
                        <option value="0" <?php if($pesertaasuransi->kabupaten_kota=="0") echo 'selected="selected"'; ?>>-Pilih Kabupaten / Kota-</option>
                        <option value="kabupaten serang" <?php if($pesertaasuransi->kabupaten_kota=="kabupaten serang") echo 'selected="selected"'; ?>>Kabupaten Serang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kecamatan</label>
                    <select class="form-control" name="kecamatan">
                        <option value="0" <?php if($pesertaasuransi->kecamatan=="0") echo 'selected="selected"'; ?>>-Pilih Kecamatan-</option>
                        <option value="anyar" <?php if($pesertaasuransi->kecamatan=="anyar") echo 'selected="selected"'; ?>>Anyar</option>
                        <option value="bandung" <?php if($pesertaasuransi->kecamatan=="bandung") echo 'selected="selected"'; ?>>Bandung</option>
                        <option value="baros" <?php if($pesertaasuransi->kecamatan=="baros") echo 'selected="selected"'; ?>>Baros</option>
                        <option value="binuang" <?php if($pesertaasuransi->kecamatan=="binuang") echo 'selected="selected"'; ?>>Binuang</option>
                        <option value="bojonegara" <?php if($pesertaasuransi->kecamatan=="bojonegara") echo 'selected="selected"'; ?>>Bojonegara</option>
                        <option value="carenang" <?php if($pesertaasuransi->kecamatan=="carenang") echo 'selected="selected"'; ?>>Carenang</option>
                        <option value="cikande" <?php if($pesertaasuransi->kecamatan=="cikande") echo 'selected="selected"'; ?>>Cikande</option>
                        <option value="cikeusal" <?php if($pesertaasuransi->kecamatan=="cikeudal") echo 'selected="selected"'; ?>>Cikeusal</option>
                        <option value="cinangka" <?php if($pesertaasuransi->kecamatan=="cinangka") echo 'selected="selected"'; ?>>Cinangka</option>
                        <option value="ciomas" <?php if($pesertaasuransi->kecamatan=="ciomas") echo 'selected="selected"'; ?>>Ciomas</option>
                        <option value="ciruas" <?php if($pesertaasuransi->kecamatan=="ciruas") echo 'selected="selected"'; ?>>Ciruas</option>
                        <option value="gunung sari" <?php if($pesertaasuransi->kecamatan=="gunung sari") echo 'selected="selected"'; ?>>Gunung Sari</option>
                        <option value="jawilan" <?php if($pesertaasuransi->kecamatan=="jawilan") echo 'selected="selected"'; ?>>Jawilan</option>
                        <option value="kibin" <?php if($pesertaasuransi->kecamatan=="kibin") echo 'selected="selected"'; ?>>Kibin</option>
                        <option value="kopo" <?php if($pesertaasuransi->kecamatan=="kopo") echo 'selected="selected"'; ?>>Kopo</option>
                        <option value="kragilan" <?php if($pesertaasuransi->kecamatan=="kragilan") echo 'selected="selected"'; ?>>Kragilan</option>
                        <option value="kramatwatu" <?php if($pesertaasuransi->kecamatan=="kramatwatu") echo 'selected="selected"'; ?>>Kramatwatu</option>
                        <option value="lebak wangi" <?php if($pesertaasuransi->kecamatan=="lebak wangi") echo 'selected="selected"'; ?>>Lebak Wangi</option>
                        <option value="mancak" <?php if($pesertaasuransi->kecamatan=="mancak") echo 'selected="selected"'; ?>>Mancak</option>
                        <option value="pabuaran" <?php if($pesertaasuransi->kecamatan=="pabuaran") echo 'selected="selected"'; ?>>Pabuaran</option>
                        <option value="petir" <?php if($pesertaasuransi->kecamatan=="petir") echo 'selected="selected"'; ?>>Petir</option>
                        <option value="pulo ampel" <?php if($pesertaasuransi->kecamatan=="pulo ampel") echo 'selected="selected"'; ?>>Pulo Ampel</option>
                        <option value="tanara" <?php if($pesertaasuransi->kecamatan=="tanara") echo 'selected="selected"'; ?>>Tanara</option>
                        <option value="tirtayasa" <?php if($pesertaasuransi->kecamatan=="tirtayasa") echo 'selected="selected"'; ?>>Tirtayasa</option>
                        <option value="tunjung teja" <?php if($pesertaasuransi->kecamatan=="tunjung teja") echo 'selected="selected"'; ?>>Tunjung Teja</option>
                        <option value="waringinkurung"> <?php if($pesertaasuransi->kecamatan=="waringinkurung") echo 'selected="selected"'; ?>Waringinkurung</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Desa</label>
                    <input type="text" class="form-control" name="desa" value="{{ $pesertaasuransi->desa }}">
                </div>

                <div class="form-group">
                    <label>Jenis Ternak</label>
                    <input type="text" class="form-control" name="jenis_ternak" value="{{ $pesertaasuransi->jenis_ternak }}">
                </div>

                <div class="form-group">
                    <label>Jumlah Ternak</label>
                    <input type="number" class="form-control" name="jumlah_ternak" value="{{ $pesertaasuransi->jumlah_ternak }}">
                </div>

                <div class="form-group">
                    <label>KTP</label>
                    <input type="file" class="form-control" name="ktp">
                    <input type="text" class="form-control" name="old_file1" value="{{ $pesertaasuransi->ktp }}" hidden>
                </div>

                <div class="form-group">
                    <label>Foto Ternak</label>
                    <input type="file" class="form-control" name="foto">
                    <input type="text" class="form-control" name="old_file2" value="{{ $pesertaasuransi->foto_ternak }}" hidden>
                </div>

                <div class="form-group">
                    <label>Surat Pengantar</label>
                    <input type="file" class="form-control" name="surat">
                    <input type="text" class="form-control" name="old_file3" value="{{ $pesertaasuransi->surat_pengantar }}" hidden>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


@endsection

@push('service')

@endpush

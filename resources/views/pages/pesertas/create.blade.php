@extends('layouts.master')

@section('title','Form Data Pengajuan')

@section('conten')

<x-alert></x-alert>
<div class="card">
    <div class="card-header bg-white">
        <h3>Form Peserta Asuransi</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('pesertaasuransi.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Peternak</label>
                    <select class="form-control" name="id_user" readonly>
                            <option value="{{auth()->user()->id}}">{{auth()->user()->name}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pengajuan" value="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" required>
                </div>

                <div class="form-group">
                    <label>Kabupaten / Kota</label>
                    <select class="form-control" name="kabupaten_kota">
                        <option value="0">-Pilih Kabupaten / Kota-</option>
                        <option value="kabupaten serang">Kabupaten Serang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kecamatan</label>
                    <select class="form-control" name="kecamatan">
                        <option value="0">-Pilih Kecamatan-</option>
                        <option value="anyar">Anyar</option>
                        <option value="bandung">Bandung</option>
                        <option value="baros">Baros</option>
                        <option value="binuang">Binuang</option>
                        <option value="bojonegara">Bojonegara</option>
                        <option value="carenang">Carenang</option>
                        <option value="cikande">Cikande</option>
                        <option value="cikeusal">Cikeusal</option>
                        <option value="cinangka">Cinangka</option>
                        <option value="ciomas">Ciomas</option>
                        <option value="ciruas">Ciruas</option>
                        <option value="gunung sari">Gunung Sari</option>
                        <option value="jawilan">Jawilan</option>
                        <option value="kibin">Kibin</option>
                        <option value="kopo">Kopo</option>
                        <option value="kragilan">Kragilan</option>
                        <option value="kramatwatu">Kramatwatu</option>
                        <option value="lebak wangi">Lebak Wangi</option>
                        <option value="mancak">Mancak</option>
                        <option value="pabuaran">Pabuaran</option>
                        <option value="petir">Petir</option>
                        <option value="pulo ampel">Pulo Ampel</option>
                        <option value="tanara">Tanara</option>
                        <option value="tirtayasa">Tirtayasa</option>
                        <option value="tunjung teja">Tunjung Teja</option>
                        <option value="waringinkurung">Waringinkurung</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Desa</label>
                    <input type="text" class="form-control" name="desa" required>
                </div>

                <div class="form-group">
                    <label>Jenis Ternak</label>
                    <input type="text" class="form-control" name="jenis_ternak" required>
                </div>

                <div class="form-group">
                    <label>Jumlah Hewan Ternak</label>
                    <input type="number" class="form-control" name="jumlah_ternak" required>
                </div>

                <div class="form-group">
                    <label>KTP</label>
                    <input type="file" class="form-control" name="ktp" required>
                </div>

                <div class="form-group">
                    <label>Foto Ternak</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>

                <div class="form-group">
                    <label>Surat Pengantar</label>
                    <input type="file" class="form-control" name="surat" required>
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
